import { DataTypes } from 'sequelize';
import sequelize from '../config/db.js';

const Auction = sequelize.define('Auction', {
    title: { type: DataTypes.STRING, allowNull: false },
    description: { type: DataTypes.TEXT, allowNull: false },
    imageUrl: { type: DataTypes.STRING },
    basePrice: { type: DataTypes.FLOAT, allowNull: false },
    startTime: { type: DataTypes.DATE, allowNull: false },
    endTime: { type: DataTypes.DATE, allowNull: false },
    status: { type: DataTypes.ENUM('upcoming', 'active', 'ended'), defaultValue: 'upcoming' },
});

export default Auction;
