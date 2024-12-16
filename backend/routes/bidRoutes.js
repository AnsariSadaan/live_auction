import express from 'express';
import { getBidsByAuction, placeBid } from '../controller/bidController.js';


const router = express.Router();

router.post('/place', placeBid);
router.get('/auction/:auctionId', getBidsByAuction);

export default router;
