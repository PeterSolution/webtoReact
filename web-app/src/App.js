import logo from './logo.svg';
import './App.css';

import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Routes, Navigate } from 'react-router-dom';
import LoginPage from './LoginPage';
import HomePage from './HomePage';

function App() {
  const [isAuthenticated, setIsAuthenticated] = useState(false);

  const handleLogin = () => {
    setIsAuthenticated(true);
  };

  return (
    <Router>
      <Routes>
        <Route path="/" element={isAuthenticated ? <Navigate to="/home" /> : <LoginPage onLogin={handleLogin} />} />
        <Route path="/home" element={isAuthenticated ? <HomePage /> : <Navigate to="/" />} />
      </Routes>
    </Router>
  );
}

export default App;
