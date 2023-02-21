ALTER TABLE %4$s
			CHANGE ip ip varchar(100) NOT NULL default '';

ALTER TABLE %5$s
			ADD NOTIFY_SOUND varchar(255) NOT NULL default 'sounds/notify.wav';

ALTER TABLE %6$s
			CHANGE ip ip varchar(100) NOT NULL default '';

ALTER TABLE %8$s
			CHANGE ip ip varchar(100) NOT NULL default '',
			DROP use_sounds;

ALTER TABLE %9$s
			CHANGE ip ip varchar(100) NOT NULL default '';

ALTER TABLE %10$s
			CHANGE ip ip varchar(100) NOT NULL default '';