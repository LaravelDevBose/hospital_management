-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 01:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admin_id` int(20) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` varchar(150) DEFAULT NULL,
  `avatar` text,
  `password` text NOT NULL,
  `active_status` char(5) DEFAULT 'A' COMMENT 'A= Active, B=Block',
  `status` char(5) DEFAULT 'A' COMMENT 'A=Active D=Delete',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `username`, `email`, `phone_num`, `avatar`, `password`, `active_status`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '01731909035', 'assets/upload_pic/admin_image/14867395945c1e25f060c1f.jpg', 'e35cf7b66449df565f93c607d5a81d09', 'A', 'A', NULL, 'admin', '2018-12-22 04:42:19', '2018-12-22 06:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE `tbl_admission` (
  `ad_id` int(20) UNSIGNED NOT NULL,
  `ad_code` varchar(100) NOT NULL,
  `patient_id` int(20) UNSIGNED NOT NULL,
  `ad_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `relies_date` timestamp NULL DEFAULT NULL,
  `doctor_id` int(20) UNSIGNED DEFAULT NULL,
  `bed_id` int(20) UNSIGNED DEFAULT NULL,
  `ad_status` char(10) DEFAULT 'A',
  `status` char(10) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `brand_id` int(20) UNSIGNED NOT NULL,
  `brand_code` varchar(100) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `brand_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(20) UNSIGNED NOT NULL,
  `cat_code` varchar(100) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_description` text,
  `cat_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collections`
--

CREATE TABLE `tbl_collections` (
  `coll_id` int(20) UNSIGNED NOT NULL,
  `coll_code` varchar(100) NOT NULL,
  `patient_id` int(20) UNSIGNED NOT NULL,
  `payment_type` char(5) NOT NULL,
  `coll_amount` int(10) UNSIGNED NOT NULL,
  `payment_method` char(5) NOT NULL DEFAULT 'Cash',
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `check_no` varchar(100) DEFAULT NULL,
  `coll_note` text,
  `coll_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `dept_id` int(20) UNSIGNED NOT NULL,
  `dept_name` varchar(200) NOT NULL,
  `dept_code` varchar(100) DEFAULT NULL,
  `dept_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `desg_id` int(20) UNSIGNED NOT NULL,
  `desg_code` varchar(100) DEFAULT NULL,
  `desg_name` varchar(200) NOT NULL,
  `desg_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `doc_id` int(20) UNSIGNED NOT NULL,
  `doc_code` varchar(100) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `doc_email` varchar(100) DEFAULT NULL,
  `doc_phone` varchar(100) DEFAULT NULL,
  `doc_gender` varchar(50) NOT NULL,
  `desg_id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `doc_address` text,
  `doc_image` text,
  `doc_edu` text,
  `doc_status` char(5) DEFAULT 'A',
  `doc_salary` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emergency`
--

CREATE TABLE `tbl_emergency` (
  `emg_id` int(20) UNSIGNED NOT NULL,
  `patient_id` int(20) UNSIGNED NOT NULL,
  `emg_fullname` varchar(200) NOT NULL,
  `emg_relation` char(50) DEFAULT NULL,
  `emg_mobile` varchar(100) DEFAULT NULL,
  `emg_address` text,
  `emg_status` char(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE `tbl_expenses` (
  `expense_id` int(20) UNSIGNED NOT NULL,
  `expense_code` varchar(100) NOT NULL,
  `eh_id` int(10) UNSIGNED NOT NULL,
  `expense_amount` int(10) UNSIGNED NOT NULL,
  `expense_note` text,
  `expense_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `inventory_id` int(20) UNSIGNED NOT NULL,
  `pro_id` int(20) UNSIGNED NOT NULL,
  `sale_qty` int(5) UNSIGNED DEFAULT '0',
  `sale_return` int(5) UNSIGNED DEFAULT '0',
  `sale_damage` int(5) UNSIGNED DEFAULT '0',
  `purchase_qty` int(5) UNSIGNED DEFAULT '0',
  `purchase_return` int(5) UNSIGNED DEFAULT '0',
  `purchase_damage` int(5) UNSIGNED DEFAULT '0',
  `current_qty` int(5) UNSIGNED DEFAULT '0',
  `inventory_status` char(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operation_theater`
--

CREATE TABLE `tbl_operation_theater` (
  `ot_id` int(10) UNSIGNED NOT NULL,
  `ot_code` varchar(100) NOT NULL,
  `ot_name` varchar(200) NOT NULL,
  `ot_chnage` int(10) UNSIGNED NOT NULL,
  `ot_details` text,
  `ot_status` char(5) DEFAULT 'A',
  `ot_activation` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ot_shedules`
--

CREATE TABLE `tbl_ot_shedules` (
  `ts_id` int(20) UNSIGNED NOT NULL,
  `ts_code` varchar(100) NOT NULL,
  `doc_id` int(20) UNSIGNED NOT NULL,
  `patient_id` int(20) UNSIGNED NOT NULL,
  `ot_id` int(20) UNSIGNED NOT NULL,
  `ts_cost` int(10) UNSIGNED NOT NULL,
  `ts_start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ts_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ts_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `patient_id` int(20) UNSIGNED NOT NULL,
  `patient_code` varchar(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `age` varchar(100) DEFAULT NULL,
  `patient_gender` char(10) NOT NULL,
  `blood_group` char(5) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `spounce_name` varchar(200) DEFAULT NULL,
  `religion` varchar(150) DEFAULT NULL,
  `patient_address` text,
  `patient_status` char(10) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_bull`
--

CREATE TABLE `tbl_patient_bull` (
  `bill_id` int(20) UNSIGNED NOT NULL,
  `bill_code` varchar(100) NOT NULL,
  `patient_id` int(20) UNSIGNED NOT NULL,
  `billhead_id` int(10) UNSIGNED DEFAULT '0',
  `bill_amount` int(10) UNSIGNED NOT NULL,
  `bill_note` text,
  `bill_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(2) UNSIGNED NOT NULL,
  `pro-code` varchar(50) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `genetic_name` varchar(200) NOT NULL,
  `body_num` varchar(100) DEFAULT NULL,
  `body_rate` int(11) DEFAULT NULL,
  `pro_type` varchar(100) DEFAULT NULL,
  `cat_id` int(20) NOT NULL,
  `brand_id` int(10) DEFAULT NULL,
  `pro_reorder` int(5) DEFAULT NULL,
  `pro_purchase_rate` int(10) NOT NULL,
  `pro_sale_rate` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `pro_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchasedetails`
--

CREATE TABLE `tbl_purchasedetails` (
  `pd_id` int(20) UNSIGNED NOT NULL,
  `pm_id` int(20) UNSIGNED NOT NULL,
  `pro_id` int(20) UNSIGNED NOT NULL,
  `pd_qty` int(10) UNSIGNED NOT NULL,
  `pd_purchase_rate` int(10) UNSIGNED NOT NULL,
  `pd_sale_rate` int(10) UNSIGNED NOT NULL,
  `pd_dis_persent` int(5) UNSIGNED DEFAULT '0',
  `pd_dis_amount` int(5) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchasemaster`
--

CREATE TABLE `tbl_purchasemaster` (
  `pm_id` int(20) UNSIGNED NOT NULL,
  `pm_invoice` varchar(100) NOT NULL,
  `sup_id` int(20) UNSIGNED NOT NULL,
  `pm_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pm_note` text,
  `pm_dis_persent` int(5) UNSIGNED DEFAULT '0',
  `pm_dis_amount` int(5) UNSIGNED DEFAULT '0',
  `pm_subtotal` int(10) UNSIGNED NOT NULL,
  `pm_roundoff` int(5) UNSIGNED DEFAULT '0',
  `pm_total` int(10) UNSIGNED NOT NULL,
  `pm_paid` int(10) UNSIGNED DEFAULT '0',
  `pm_due` int(10) UNSIGNED DEFAULT '0',
  `pm_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_returndetails`
--

CREATE TABLE `tbl_returndetails` (
  `rd_id` int(20) UNSIGNED NOT NULL,
  `rm_id` int(20) UNSIGNED NOT NULL,
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_id` int(20) UNSIGNED NOT NULL,
  `rd_qty` int(5) UNSIGNED NOT NULL,
  `rd_total_amount` int(5) UNSIGNED NOT NULL,
  `rm_discount` int(5) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_returnmaster`
--

CREATE TABLE `tbl_returnmaster` (
  `return_id` int(20) UNSIGNED NOT NULL,
  `invoice_id` int(20) UNSIGNED NOT NULL,
  `rm_qty` int(5) UNSIGNED NOT NULL,
  `rm_total_amount` int(10) UNSIGNED NOT NULL,
  `rm_note` text,
  `return_type` char(5) NOT NULL DEFAULT 'S',
  `discount` int(5) UNSIGNED DEFAULT '0',
  `rm_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `room_id` int(20) UNSIGNED NOT NULL,
  `room_code` varchar(100) NOT NULL,
  `room_name` varchar(200) NOT NULL,
  `bathroom` char(10) DEFAULT 'No',
  `tv` char(10) DEFAULT 'No',
  `ac` char(10) DEFAULT 'No',
  `room_details` text,
  `room_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_month`
--

CREATE TABLE `tbl_salary_month` (
  `slm_id` int(20) UNSIGNED NOT NULL,
  `month_name` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `slm_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payments`
--

CREATE TABLE `tbl_salary_payments` (
  `sp_id` int(20) UNSIGNED NOT NULL,
  `sp_code` varchar(100) NOT NULL,
  `emp_id` int(20) UNSIGNED NOT NULL,
  `month_id` int(20) UNSIGNED NOT NULL,
  `emp_type` char(5) NOT NULL DEFAULT 'S',
  `payment_amount` int(10) UNSIGNED NOT NULL,
  `due_amount` int(10) UNSIGNED DEFAULT '0',
  `sp_note` text,
  `sp_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saledetails`
--

CREATE TABLE `tbl_saledetails` (
  `sd_id` int(20) UNSIGNED NOT NULL,
  `sm_id` int(20) UNSIGNED NOT NULL,
  `pro_id` int(20) UNSIGNED NOT NULL,
  `sd_qty` int(5) UNSIGNED NOT NULL,
  `sd_purchase_rate` int(10) UNSIGNED NOT NULL,
  `sd_sale_rate` int(10) UNSIGNED NOT NULL,
  `sd_dis_persent` int(5) UNSIGNED DEFAULT '0',
  `sd_dis_amount` int(5) UNSIGNED DEFAULT '0',
  `sd_status` char(5) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salemaster`
--

CREATE TABLE `tbl_salemaster` (
  `sm_id` int(20) UNSIGNED NOT NULL,
  `sm_invoice` varchar(100) NOT NULL,
  `cus_id` int(20) UNSIGNED NOT NULL,
  `sale_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sm_note` text,
  `sm_dis_persent` int(3) UNSIGNED DEFAULT '0',
  `sm_dis_amount` int(10) UNSIGNED DEFAULT '0',
  `sm_subtotal` int(10) UNSIGNED NOT NULL,
  `sm_roundoff` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sm_total_amount` int(10) UNSIGNED NOT NULL,
  `sm_paid` int(10) UNSIGNED DEFAULT '0',
  `sm_due` int(10) UNSIGNED DEFAULT '0',
  `sm_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stuffs`
--

CREATE TABLE `tbl_stuffs` (
  `stuff_id` int(20) UNSIGNED NOT NULL,
  `stuff_code` varchar(100) NOT NULL,
  `stuff_name` varchar(200) NOT NULL,
  `stuff_email` varchar(100) DEFAULT NULL,
  `stuff_phone` varchar(100) DEFAULT NULL,
  `desg_id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `stuff_gender` varchar(20) NOT NULL,
  `stuff_address` text,
  `stuff_image` text,
  `stuff_edu` text,
  `stuff_status` char(5) DEFAULT 'A',
  `stuff_salary` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_by` varchar(10) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `sup_id` int(20) UNSIGNED NOT NULL,
  `sup_code` varchar(100) NOT NULL,
  `sup_name` varchar(200) NOT NULL,
  `sup_type` char(10) DEFAULT NULL,
  `sup_mobile` varchar(100) DEFAULT NULL,
  `sup_email` varchar(100) DEFAULT NULL,
  `sup_address` text,
  `sup_due` int(10) UNSIGNED DEFAULT NULL,
  `sup_status` char(5) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testdetails`
--

CREATE TABLE `tbl_testdetails` (
  `td_id` int(20) UNSIGNED NOT NULL,
  `tm_id` int(20) UNSIGNED NOT NULL,
  `test_id` int(20) UNSIGNED NOT NULL,
  `test_rate` int(10) UNSIGNED NOT NULL,
  `td_dis_persent` int(5) UNSIGNED DEFAULT '0',
  `tb_dis_amount` int(5) UNSIGNED DEFAULT '0',
  `lob_id` int(10) UNSIGNED DEFAULT NULL,
  `delivery_date` timestamp NULL DEFAULT NULL,
  `td_status` char(5) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testmaster`
--

CREATE TABLE `tbl_testmaster` (
  `tm_id` int(20) NOT NULL,
  `tm_code` varchar(100) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `tm_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tm_note` text,
  `tm_dis_present` int(10) DEFAULT '0',
  `tm_dis_amount` int(10) DEFAULT '0',
  `tm_subtotal` int(10) NOT NULL,
  `tm_roundoff` int(10) NOT NULL,
  `tm_total` int(10) NOT NULL,
  `tm_paid` int(10) NOT NULL,
  `tm_due` int(10) NOT NULL,
  `tm_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tests`
--

CREATE TABLE `tbl_tests` (
  `test_id` int(20) UNSIGNED NOT NULL,
  `test_code` varchar(100) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `test_parent_id` int(20) UNSIGNED DEFAULT NULL,
  `test_activation` char(10) DEFAULT 'A' COMMENT 'A= Aviable U = unaviable',
  `test_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_reports`
--

CREATE TABLE `tbl_test_reports` (
  `report_id` int(20) UNSIGNED NOT NULL,
  `report_code` varchar(100) NOT NULL,
  `tm_id` int(20) UNSIGNED NOT NULL COMMENT 'test master id',
  `td_id` int(20) UNSIGNED NOT NULL COMMENT 'test details id',
  `test_id` int(20) UNSIGNED NOT NULL COMMENT 'test table id',
  `report_data` text,
  `report_status` char(10) DEFAULT 'A',
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_templates`
--

CREATE TABLE `tbl_test_templates` (
  `temp_id` int(20) UNSIGNED NOT NULL,
  `test_id` int(20) UNSIGNED NOT NULL,
  `template` text,
  `temp_status` char(10) DEFAULT 'A',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_units`
--

CREATE TABLE `tbl_units` (
  `unit_id` int(20) UNSIGNED NOT NULL,
  `unit_name` varchar(200) NOT NULL,
  `unit_status` char(5) DEFAULT 'A',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_by` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_collections`
--
ALTER TABLE `tbl_collections`
  ADD PRIMARY KEY (`coll_id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`desg_id`);

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tbl_emergency`
--
ALTER TABLE `tbl_emergency`
  ADD PRIMARY KEY (`emg_id`);

--
-- Indexes for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `tbl_operation_theater`
--
ALTER TABLE `tbl_operation_theater`
  ADD PRIMARY KEY (`ot_id`);

--
-- Indexes for table `tbl_ot_shedules`
--
ALTER TABLE `tbl_ot_shedules`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_patient_bull`
--
ALTER TABLE `tbl_patient_bull`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_purchasedetails`
--
ALTER TABLE `tbl_purchasedetails`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `tbl_purchasemaster`
--
ALTER TABLE `tbl_purchasemaster`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `tbl_returndetails`
--
ALTER TABLE `tbl_returndetails`
  ADD PRIMARY KEY (`rd_id`);

--
-- Indexes for table `tbl_returnmaster`
--
ALTER TABLE `tbl_returnmaster`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_salary_month`
--
ALTER TABLE `tbl_salary_month`
  ADD PRIMARY KEY (`slm_id`);

--
-- Indexes for table `tbl_salary_payments`
--
ALTER TABLE `tbl_salary_payments`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `tbl_saledetails`
--
ALTER TABLE `tbl_saledetails`
  ADD PRIMARY KEY (`sd_id`),
  ADD UNIQUE KEY `sd_id` (`sd_id`);

--
-- Indexes for table `tbl_salemaster`
--
ALTER TABLE `tbl_salemaster`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `tbl_stuffs`
--
ALTER TABLE `tbl_stuffs`
  ADD PRIMARY KEY (`stuff_id`);

--
-- Indexes for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `tbl_testdetails`
--
ALTER TABLE `tbl_testdetails`
  ADD PRIMARY KEY (`td_id`);

--
-- Indexes for table `tbl_testmaster`
--
ALTER TABLE `tbl_testmaster`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tbl_test_reports`
--
ALTER TABLE `tbl_test_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `tbl_test_templates`
--
ALTER TABLE `tbl_test_templates`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `tbl_units`
--
ALTER TABLE `tbl_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admin_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  MODIFY `ad_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `brand_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_collections`
--
ALTER TABLE `tbl_collections`
  MODIFY `coll_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `desg_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `doc_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  MODIFY `expense_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `inventory_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_operation_theater`
--
ALTER TABLE `tbl_operation_theater`
  MODIFY `ot_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ot_shedules`
--
ALTER TABLE `tbl_ot_shedules`
  MODIFY `ts_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_patient_bull`
--
ALTER TABLE `tbl_patient_bull`
  MODIFY `bill_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchasedetails`
--
ALTER TABLE `tbl_purchasedetails`
  MODIFY `pd_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchasemaster`
--
ALTER TABLE `tbl_purchasemaster`
  MODIFY `pm_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_returndetails`
--
ALTER TABLE `tbl_returndetails`
  MODIFY `rd_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_returnmaster`
--
ALTER TABLE `tbl_returnmaster`
  MODIFY `return_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `room_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_month`
--
ALTER TABLE `tbl_salary_month`
  MODIFY `slm_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payments`
--
ALTER TABLE `tbl_salary_payments`
  MODIFY `sp_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_saledetails`
--
ALTER TABLE `tbl_saledetails`
  MODIFY `sd_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salemaster`
--
ALTER TABLE `tbl_salemaster`
  MODIFY `sm_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stuffs`
--
ALTER TABLE `tbl_stuffs`
  MODIFY `stuff_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  MODIFY `sup_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_testdetails`
--
ALTER TABLE `tbl_testdetails`
  MODIFY `td_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_testmaster`
--
ALTER TABLE `tbl_testmaster`
  MODIFY `tm_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tests`
--
ALTER TABLE `tbl_tests`
  MODIFY `test_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_test_reports`
--
ALTER TABLE `tbl_test_reports`
  MODIFY `report_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_test_templates`
--
ALTER TABLE `tbl_test_templates`
  MODIFY `temp_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_units`
--
ALTER TABLE `tbl_units`
  MODIFY `unit_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
