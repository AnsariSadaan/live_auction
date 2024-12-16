import express from 'express';
import { getChatsByAuction, sendMessage } from '../controller/chatController.js';

const router = express.Router();

router.post('/send', sendMessage);
router.get('/auction/:auctionId', getChatsByAuction);

export default router;
