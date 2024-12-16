import express from 'express';
import cors from 'cors';
import bodyParser from 'body-parser';
import { Server as SocketIO } from 'socket.io';
import http from 'http';
import sequelize from "./config/db.js";
// Import routes
import userRoutes from "./routes/userRoutes.js";
import auctionRoutes from './routes/auctionRoutes.js';
import bidRoutes from './routes/bidRoutes.js';
import chatRoutes from './routes/chatRoutes.js';

// Initialize app
const app = express();
const server = http.createServer(app);
const io = new SocketIO(server, { cors: { origin: '*' } });

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Routes
app.use("/api/users", userRoutes);
app.use('/api/auctions', auctionRoutes);
app.use('/api/bids', bidRoutes);
app.use('/api/chats', chatRoutes);

// Socket.IO
io.on('connection', (socket) => {
    console.log('User connected:', socket.id);

    socket.on('joinAuction', (auctionId) => {
        socket.join(auctionId);
        console.log(`User joined auction: ${auctionId}`);
    });

    socket.on('newBid', (data) => {
        io.to(data.auctionId).emit('bidUpdate', data);
        console.log('Bid update:', data);
    });

    socket.on('newMessage', (data) => {
        io.to(data.auctionId).emit('chatUpdate', data);
        console.log('Chat update:', data);
    });

    socket.on('disconnect', () => {
        console.log('User disconnected:', socket.id);
    });
});


sequelize
    .sync()
    .then(() => console.log("Database connected and synced."))
    .catch((err) => console.error("Database sync error:", err));

// Start server
const PORT = 5000;
server.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
