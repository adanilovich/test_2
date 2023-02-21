ALTER TABLE %4$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			ADD country_code varchar(3) NOT NULL default '',
			ADD country_name varchar(100) NOT NULL default '';

ALTER TABLE %5$s
			CHANGE GRAVATARS_DYNAMIC_DEF GRAVATARS_DYNAMIC_DEF enum('mm','identicon','monsterid','wavatar','retro') default 'monsterid',
			ADD USE_FLAGS enum('0','1') NOT NULL default '1',
			ADD SHOW_FLAGS enum('0','1') NOT NULL default '1',
			ADD NOTIFY_SOUND varchar(255) NOT NULL default 'sounds/notify.wav';

UPDATE %5$s SET
			CHAT_SYSTEM = 'standalone',
			ALLOW_TEXT_COLORS = '1'
	WHERE ID='0';

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