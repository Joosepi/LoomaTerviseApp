import './bootstrap';
const express = require('express');
const sequelize = require('../../config/database');
const Pet = require('../../models/Pet');

const app = express();
app.use(express.json());

// Sync all models with the database
sequelize.sync({ force: false })
  .then(() => console.log('Database & tables created!'));

// Basic route to create a pet
app.post('/pets', async (req, res) => {
  try {
    const pet = await Pet.create(req.body);
    res.status(201).json(pet);
  } catch (error) {
    res.status(400).json({ error: error.message });
  }
});

// Basic route to get all pets
app.get('/pets', async (req, res) => {
  try {
    const pets = await Pet.findAll();
    res.json(pets);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
