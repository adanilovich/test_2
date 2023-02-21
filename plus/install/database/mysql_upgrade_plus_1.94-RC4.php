ALTER TABLE %4$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';

ALTER TABLE %5$s
			ADD USE_FLAGS enum('0','1') NOT NULL default '1',
			ADD SHOW_FLAGS enum('0','1') NOT NULL default '1',
			ADD NOTIFY_SOUND varchar(255) NOT NULL default 'sounds/notify.wav';

ALTER TABLE %6$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';

ALTER TABLE %8$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';

ALTER TABLE %9$s
			ADD ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';

ALTER TABLE %10$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';