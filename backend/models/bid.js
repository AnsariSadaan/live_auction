import { DataTypes } from 'sequelize';
import sequelize from '../config/db.js';
import Auction from './auction.js';
import User from './user.js';

const Bid = sequelize.define('Bid', {
    amount: { type: DataTypes.FLOAT, allowNull: false },
}, { timestamps: true });

Bid.belongsTo(Auction);
Bid.belongsTo(User);

export default Bid;
