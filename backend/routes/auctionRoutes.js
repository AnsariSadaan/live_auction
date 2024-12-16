import express from 'express';
import { createAuction, getAuctionById, listAuctions } from '../controller/auctionController.js';

const router = express.Router();

router.post('/create', createAuction);
router.get('/', listAuctions);
router.get('/:id', getAuctionById);

export default router;
