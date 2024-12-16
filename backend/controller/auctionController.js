import Auction from '../models/auction.js';

export const createAuction = async (req, res) => {
    try {
        const auction = await Auction.create(req.body);
        res.status(201).json(auction);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};

export const listAuctions = async (req, res) => {
    try {
        const auctions = await Auction.findAll();
        res.status(200).json(auctions);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};

export const getAuctionById = async (req, res) => {
    try {
        const auction = await Auction.findByPk(req.params.id);
        if (!auction) {
            return res.status(404).json({ error: 'Auction not found' });
        }
        res.status(200).json(auction);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};
