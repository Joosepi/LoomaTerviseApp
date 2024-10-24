const { Sequelize } = require('sequelize');

const sequelize = new Sequelize('d118823_loomaterviseapp', 'd118823sa456410', 'DABABY4321', {
  host: 'd118823.mysql.zonevs.eu',
  dialect: 'mysql',
  logging: false, // Set to console.log to see the generated SQL queries
});

// Test the connection
async function testConnection() {
  try {
    await sequelize.authenticate();
    console.log('Connection to the database has been established successfully.');
  } catch (error) {
    console.error('Unable to connect to the database:', error);
  }
}

testConnection();

module.exports = sequelize;

