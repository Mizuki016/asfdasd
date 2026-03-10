-- ============================================================
--  UniClub Database Schema
--  Import this file in phpMyAdmin:
--  Database > Import > Select File > database.sql > Go
-- ============================================================

-- 1. Create & select the database
CREATE DATABASE IF NOT EXISTS uniclub_db
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_unicode_ci;

USE uniclub_db;

-- 2. Students table
CREATE TABLE IF NOT EXISTS students (
    id             INT          UNSIGNED NOT NULL AUTO_INCREMENT,
    student_id     VARCHAR(20)  NOT NULL UNIQUE,
    first_name     VARCHAR(60)  NOT NULL,
    last_name      VARCHAR(60)  NOT NULL,
    full_name      VARCHAR(120) NOT NULL,
    email          VARCHAR(120) NOT NULL UNIQUE,
    course         VARCHAR(80)  NOT NULL,
    year_level     VARCHAR(20)  NOT NULL,
    club           VARCHAR(80)  NOT NULL,
    password_hash  VARCHAR(255) NOT NULL,
    profile_photo  VARCHAR(255) NOT NULL DEFAULT 'uploads/default_avatar.png',
    status         ENUM('active','inactive','pending') NOT NULL DEFAULT 'active',
    created_at     DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at     DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (id),
    INDEX idx_email      (email),
    INDEX idx_student_id (student_id),
    INDEX idx_club       (club),
    INDEX idx_created    (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. Optional: Clubs reference table
CREATE TABLE IF NOT EXISTS clubs (
    id          INT         UNSIGNED NOT NULL AUTO_INCREMENT,
    name        VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    icon        VARCHAR(10),
    member_count INT UNSIGNED NOT NULL DEFAULT 0,
    created_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Seed clubs
INSERT IGNORE INTO clubs (name, description, icon, member_count) VALUES
  ('Computer Science Society',  'Hackathons, coding bootcamps, and industry mentorship.',       '💻', 280),
  ('Fine Arts & Design Club',   'Exhibitions, workshops, and collaborative creative projects.', '🎨', 145),
  ('Debate & Oratory Society',  'Critical thinking and public speaking competitions.',          '📢', 90),
  ('Environmental Advocates',   'Sustainability campaigns and green campus initiatives.',       '🌱', 165),
  ('Performing Arts Guild',     'Theater, dance, and musical performances.',                   '🎭', 200),
  ('Campus Journalism Club',    'Student newspaper, photography, and digital media.',          '📰', 75);

-- ============================================================
-- Quick verification queries (run these after import):
--   SELECT * FROM students ORDER BY created_at DESC;
--   SELECT * FROM clubs;
--   SELECT COUNT(*) AS total_registrations FROM students;
-- ============================================================
