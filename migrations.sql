create table `hotels` (`id` bigint unsigned not null auto_increment primary key, `hotel_name` varchar(255) not null, `hotel_location` varchar(255) not null, `hotel_description` varchar(255) not null, `hotel_host_number` varchar(255) not null, `hotel_rooms` varchar(255) not null, `hot_water` varchar(255) not null, `heating` varchar(255) not null, `internet` varchar(255) not null, `air_condition` varchar(255) not null, `closet` varchar(255) not null, `tv` varchar(255) not null, `garden` varchar(255) not null, `car_parking` varchar(255) not null, `type` enum('guesthouse', 'cottage', 'hotel') not null, `view` varchar(255) not null, `pet_friendly` varchar(255) not null, `available_time` varchar(255) not null, `price_daily` varchar(255) not null, `price_monthly` varchar(255) not null, `price_yearly` varchar(255) not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  

