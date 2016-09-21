-- drop database if exists cars;
--#
-- create database cars;
 use cars;
--#
--## 1���û���
-- create table users(
--	id int primary key auto_increment,
--	username varchar(32),-- �û��˺�
--	password varchar(32),-- �û�����
--	role enum('0','1') -- 0��ʾ�����û���1��ʾ�̼�
-- );
--#
--#
--## 2���̼���Ϣ��
-- create table trade_info(
--	id int primary key auto_increment,
--	address varchar(30), -- ��ַ
--	license_img varchar(100) default '0', -- ��Ӫ֤��ͼƬ��ַ
--	business_license varchar(30) default '0', -- Ӫҵִ�պ�
--	responsible_people varchar(10) default '0', -- ������
--	users_id int, -- ��users���id�����	
--	foreign key (users_id) references users(id),
--	phone varchar(11), -- �ֻ���
--	company varchar(20), -- ��˾
--	statInfo varchar(20) default "δ���"-- ����Ƿ�ͨ��
--	 -- �̼���Ϣ������û�������
-- );
--#
--## 3��������Ϣ��
-- create table cars_info(
--	id int primary key auto_increment,
--	users_id int, -- ��users���id�����	
--	brand varchar(20), -- Ʒ��
--	series varchar(20), -- ��ϵ
--	style varchar(20), -- ��ʽ
--	models varchar(20), -- ����
--	price decimal(10,2), -- Ԥ�ۼ۸�
--	color varchar(10), -- ������ɫ
--	discharge_level varchar(10), -- �ŷű�׼
--	discharge varchar(10), -- ��������
--	gear_box varchar(20), -- ������
--	regist_time int, -- ����ʱ���
--	release_date int, -- ��������ʱ���
--	drive_method varchar(20), -- ������ʽ
--	carry_num int, -- �ؿ�����
--	fuel varchar(20), -- ȼ��
--	size varchar(20), -- ����ߣ���ʽ: xx|xx|xx
--	mileage varchar(10), -- ���
--	source varchar(10), -- ��Դ������/����
--	look_address varchar(40), -- �����ص�
--	authenticate tinyint, -- Ʒ����֤״̬��0/1��0��ʾδ��֤��1��ʾ��֤
--	other varchar(200), -- ��������
--	seller varchar(10), -- ��ϵ��
--	seller_phone varchar(15), -- ��ϵ�绰
--	examine_status enum('0','1','2'), -- ���״̬��0��ʾδ��ˣ�1��ʾ���δͨ����2ͨ��
--	click_num int, -- �����
--	foreign key (users_id) references users(id) -- ������Ϣ������û�������
-- );
--#
--## 4��������ϢͼƬ��
-- create table car_img(
--	id int primary key auto_increment,
--	front_img varchar(20), -- ����ͼƬ��ַ
--	left_img varchar(20), -- ���ͼƬ��ַ
--	right_img varchar(20), -- �Ҳ�ͼƬ��ַ
--	back_img varchar(20), -- ����ͼƬ��ַ
--	frontIn_img varchar(20), -- ǰ��ͼƬ��ַ
--	backIn_img varchar(20), -- ����ͼƬ��ַ
--	door_panel_img varchar(20), -- �Ű�ͼƬ��ַ
--	control_center_img varchar(20), -- �п�ͼƬ��ַ
--	boot_img varchar(20), -- β��ͼƬ��ַ
--	engine_img varchar(20), -- ��������ͼƬ��ַ
--	chassis_img varchar(20), -- ����ͼƬ��ַ
--	other_img varchar(20), -- ����ͼƬ��ַ
--	cars_info_id int, -- ������Ϣid
--	foreign key (cars_info_id) references cars_info(id) -- ����ͼƬ�����������Ϣ������
-- );
--#
--#
--## 5��ԤԼ������
-- create table reserve(
--	id int primary key auto_increment,
--	users_id int, -- �û���id
--	cars_id int, -- ������id
--	phone_num varchar(15), -- �绰
--	reserve_time int, -- ԤԼʱ��
--	foreign key (users_id) references users(id), -- ԤԼ����������û�������
--	foreign key (cars_id) references cars_info(id) -- ԤԼ���������������Ϣ������
-- );
--#
--#
--## 6���������Ա�
-- create table message(
--	id int primary key auto_increment,
--	users_id int not null, -- �û�id
--	message_content text, -- ��������
--	phone_num varchar(15), -- �绰
--	message_time int, -- ����ʱ��
--	foreign key (users_id) references users(id) -- �������Ա�����û�������
-- );
--#
--## 7��������Ϣ��
-- create table person_message(
--	id int primary key auto_increment,
--	users_id int not null, -- �û�id
--	name varchar(32), -- �û�����
--	sex enum('��','Ů'), -- �Ա�
--	foreign key (users_id) references users(id) -- �������Ա�����û�������
-- );
--#
--## 8���ղر�
-- create table collection(
--	id int primary key auto_increment,
--	cars_id int not null, -- ����id
--	users_id int not null, -- �û�id
--	collection_time int, -- �ղ�ʱ��
--	foreign key (users_id) references users(id), -- �ղر�����û�������
--	foreign key (cars_id) references cars_info(id) -- �ղر����������Ϣ������
-- );
--#
--#
--#
--## 9���������
-- create table buy_intention(
--	id int primary key auto_increment,
--	brand varchar(32) not null, -- Ʒ��
--	series varchar(32) not null, -- ��ϵ
--	style varchar(32) not null, -- ������ʽ
--	models varchar(32) not null, -- �����ͺ�
--	mileage int not null, -- �������
--	old varchar(32) not null, -- ����
--	price decimal(10,2) not null, -- �۸�
--	other varchar(255), -- ����Ҫ��
--	contact varchar(32), -- ��ϵ��
--	phone varchar(15), -- �绰
--	users_id int not null, -- �û�id
--	foreign key (users_id) references users(id) -- �����������û�������
-- );
--#
--#
--#
--## 10���ֳ�������
-- create table locale_evaluate(
--	id int primary key auto_increment,
--	users_id int,  -- �����û����ID��ȷ����˭�ڰ���ҵ��
--	evaluate_state enum('0','1'), -- ����״̬��0δ������1�Ѿ�����
--	price decimal(10,2), -- �����󱨼�
--	foreign key (users_id) references users(id) -- �ֳ�����������û�������
--##	 ������Ϣ���ڸ��û�����������ʱ��ư���Ϣ�����
-- ); 
--#
--## 11������������
-- create table online_evaluate(
--	id int primary key auto_increment,
--	brand_models varchar(32) not null, -- Ʒ���ͺ�
--	color varchar(32) not null, -- ������ɫ
--	registration_time int not null, -- �����Ǽ�����
--	carbrand varchar(32) not null, -- ���ƺ�
--	mileage int not null, -- ���
--	if_accident varchar(32) not null, -- �Ƿ����¹�
--	evaluate_state enum('0','1'), -- ����״̬ 0��/1������
--	price decimal(10,2), -- �����۸�
--	users_id int, -- �û���id
--	foreign key (users_id) references users(id) -- ��������������û�������
-- );
--#
--#
--## 12����ʱ������Ϣ��
-- create table `add`(
--	id int primary key auto_increment,
--	info varchar(32), -- �û��Զ���
--	cars_info_id int, -- ������Ϣ��id
--	foreign key (cars_info_id) references cars_info(id) -- ��ʱ������Ϣ�����������Ϣ������
-- );




	drop table if exists forum_text;
	create table forum_text (
		id int primary key auto_increment,
		header varchar(200) not null,
		content text not null,
		`date` varchar(200) not null,
		wirter varchar(30) default '����',
		reading varchar(200) default '0'
	);
	drop table if exists forum_answer;
	create table forum_answer (
		id int primary key auto_increment,
		content text not null,
		`date` varchar(200) not null,
		answerer varchar(30) default '����',
		reading varchar(200) default '0',
		reading_id int not null, -- ������ ���ظ�����������id
		answer_id int not null, -- �����²��������Ļظ�
		foreign key (answer_id) references forum_text(id) -- ����id
	);
	insert into forum_text(header,content,`date`) values
	("1","����1������","1474422682936"),
	("2","����2������","1474422682900"),
	("3","����3������","1474422680936"),
	("4","����4������","1474422480936");

	insert into forum_answer(content,`date`,reading_id,answer_id) values
	("����1���ݵĻظ�","1474422682936",0,1),
	("����2���ݵĻظ�","1474422682900",0,2),
	("����1���ݻظ�1�Ļظ�","1474422680936",1,1),
	("����4���ݵĻظ�","1474422480936",0,4);

--	select * from forum_text;
--	select * from forum_answer;

	select forum_text.content,a.content,b.content
	from forum_answer as a
	join forum_text on a.answer_id = forum_text.id
	join forum_answer as b on a.id = b.reading_id;












