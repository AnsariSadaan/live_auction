import { DataTypes } from 'sequelize';
import sequelize from '../config/db.js';
import Auction from './auction.js';
import User from './user.js';

const Chat = sequelize.define('Chat', {
    message: { type: DataTypes.TEXT, allowNull: false },
}, { timestamps: true });

Chat.belongsTo(Auction);
Chat.belongsTo(User);

export default Chat;
