## Geo-Spatial Mapping and Monitoring System of Malnutrition Trends
### 📊 Malnutrition Monitoring System (MMSGSM)

A **web-based platform** designed to map and monitor malnutrition cases in **Biliran Island**, providing local health authorities with accurate, real-time data to guide decision-making and improve health outcomes.

## 📌 Table of Contents
- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [System Roles](#system-roles)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)

---

## About

The **Malnutrition Monitoring System** was developed to address the growing need for **real-time health data visualization** in Biliran Province.  
It allows **Department of Health (DOH)**, **Provincial Health Office (PHO)**, and **Rural Health Units (RHU)** to record, track, and analyze malnutrition cases in children.  

With **interactive mapping** powered by Leaflet.js, the system highlights areas with high malnutrition rates and provides data-driven insights for targeted interventions.

---

## Features

- 🔐 **Multi-user Authentication** (Admin, PHO, RHU, DOH)
- 📍 **Interactive Heatmap** for malnutrition cases
- 📑 **Children List & History** (WFA, HFA, WFH tracking)
- 📊 **Reports & Analytics**
- 📂 **Data Management** (Add, Update, Delete child records)
- ☁️ **Cloud-deployed** for accessibility

---

## Tech Stack

| Category   | Technology |
|------------|------------|
| Frontend   | HTML, CSS, JavaScript |
| Backend    | PHP |
| Database   | MySQL |
| Mapping    | Leaflet.js |
| Deployment | Cloud Hosting |

---

## System Roles

| Role  | Permissions |
|-------|-------------|
| **Admin** | Full access, manage all accounts & data |
| **PHO** | View all province data |
| **RHU** | Manage barangay-level data |
| **DOH** | View reports and analytics |

---

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/malnutrition-monitoring-system.git

2. **Navigate to project folder**
   ```bash
   cd malnutrition-monitoring-system

3. **Import the database**

- Open phpMyAdmin
- Create a new database (e.g., mms_db)
- Import the SQL file located in /database/mms_db.sql

4. **Configure database connection**
- Edit config.php with your DB credentials.
  
5. **Run the application**
- Start your local server (XAMPP, WAMP, etc.)
- Access via http://localhost/malnutrition-monitoring-system

## Usage
1. Login using your credentials.
2. Navigate to the Dashboard to view statistics.
3. Open the Map to see malnutrition data by location.
4. Generate reports from the Reports page.

## Contributing
- Fork the repository.
- Create a new branch (feature/your-feature).
- Commit your changes.
- Push to your branch and create a Pull Request.
