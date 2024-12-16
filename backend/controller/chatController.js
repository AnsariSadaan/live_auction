import Chat from '../models/chat.js';

export const sendMessage = async (req, res) => {
    try {
        const chat = await Chat.create(req.body);
        res.status(201).json(chat);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};

export const getChatsByAuction = async (req, res) => {
    try {
        const chats = await Chat.findAll({ where: { AuctionId: req.params.auctionId } });
        res.status(200).json(chats);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};
