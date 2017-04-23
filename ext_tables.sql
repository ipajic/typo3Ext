CREATE TABLE tx_inventory_domain_model_product (

        uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
        pid int(11) DEFAULT '0' NOT NULL,

        name varchar(255) DEFAULT '' NOT NULL,
        description text NOT NULL,
        quantity int(11) DEFAULT '0' NOT NULL,
        category int(11) unsigned DEFAULT '0',
        company int(11) unsigned DEFAULT '0',
        PRIMARY KEY (uid),
        KEY parent (pid)
);

CREATE TABLE tx_inventory_domain_model_category (
        uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
        pid int(11) DEFAULT '0' NOT NULL,

        name varchar(255) DEFAULT '' NOT NULL,
        description text NOT NULL,

        PRIMARY KEY (uid),
        KEY parent (pid)
);


CREATE TABLE tx_inventory_domain_model_company (
        uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
        pid int(11) DEFAULT '0' NOT NULL,

        name varchar(255) DEFAULT '' NOT NULL,
        country varchar(255) DEFAULT '' NOT NULL,

        PRIMARY KEY (uid),
        KEY parent (pid)
);