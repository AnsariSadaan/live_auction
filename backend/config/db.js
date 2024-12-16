import { Sequelize } from "sequelize";

const sequelize = new Sequelize({
    host: 'localhost',
    dialect: 'mysql',
    username: 'root',   // Replace with your MySQL username
    password: '',   // Replace with your MySQL password
    database: 'live_auction',    // Replace with your database name
});

try {
    await sequelize.authenticate();
    console.log('Connection has been established successfully.');
} catch (error) {
    console.error('Unable to connect to the database:', error);
}

export default sequelize;