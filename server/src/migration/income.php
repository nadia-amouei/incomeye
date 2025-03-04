<?php
require '../config/database.php';

$sql = "CREATE TABLE IF NOT EXISTS incomes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  category_id INT NOT NULL,
  amount VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
)";

if ($capsule->getConnection()->statement($sql)) {
  echo "Incomes table created successfully.\n";
} else {
  echo "Error creating incomes table.\n";
}