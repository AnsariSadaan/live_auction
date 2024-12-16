import Bid from '../models/bid.js';

export const placeBid = async (req, res) => {
    try {
        const bid = await Bid.create(req.body);
        res.status(201).json(bid);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};

export const getBidsByAuction = async (req, res) => {
    try {
        const bids = await Bid.findAll({ where: { AuctionId: req.params.auctionId } });
        res.status(200).json(bids);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
};
