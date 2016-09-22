-- drop database if exists cars;
--#
-- create database cars;
 use cars;
--#
--## 1、用户表
-- create table users(
--	id int primary key auto_increment,
--	username varchar(32),-- 用户账号
--	password varchar(32),-- 用户密码
--	role enum('0','1') -- 0表示个人用户，1表示商家
-- );
--#
--#
--## 2、商家信息表
-- create table trade_info(
--	id int primary key auto_increment,
--	address varchar(30), -- 地址
--	license_img varchar(100) default '0', -- 经营证照图片地址
--	business_license varchar(30) default '0', -- 营业执照号
--	responsible_people varchar(10) default '0', -- 负责人
--	users_id int, -- 和users表的id相关联	
--	foreign key (users_id) references users(id),
--	phone varchar(11), -- 手机号
--	company varchar(20), -- 公司
--	statInfo varchar(20) default "未审核"-- 审核是否通过
--	 -- 商家信息表关联用户表的外键
-- );
--#
--## 3、车辆信息表
-- create table cars_info(
--	id int primary key auto_increment,
--	users_id int, -- 和users表的id相关联	
--	brand varchar(20), -- 品牌
--	series varchar(20), -- 车系
--	style varchar(20), -- 款式
--	models varchar(20), -- 车型
--	price decimal(10,2), -- 预售价格
--	color varchar(10), -- 车体颜色
--	discharge_level varchar(10), -- 排放标准
--	discharge varchar(10), -- 车辆排量
--	gear_box varchar(20), -- 变速箱
--	regist_time int, -- 上牌时间戳
--	release_date int, -- 出厂日期时间戳
--	drive_method varchar(20), -- 驱动方式
--	carry_num int, -- 载客数量
--	fuel varchar(20), -- 燃料
--	size varchar(20), -- 长宽高，格式: xx|xx|xx
--	mileage varchar(10), -- 里程
--	source varchar(10), -- 来源，国产/进口
--	look_address varchar(40), -- 看车地点
--	authenticate tinyint, -- 品牌认证状态，0/1，0表示未认证，1表示认证
--	other varchar(200), -- 车辆补充
--	seller varchar(10), -- 联系人
--	seller_phone varchar(15), -- 联系电话
--	examine_status enum('0','1','2'), -- 审核状态，0表示未审核，1表示审核未通过，2通过
--	click_num int, -- 点击量
--	foreign key (users_id) references users(id) -- 车辆信息表关联用户表的外键
-- );
--#
--## 4、车辆信息图片表
-- create table car_img(
--	id int primary key auto_increment,
--	front_img varchar(20), -- 正面图片地址
--	left_img varchar(20), -- 左侧图片地址
--	right_img varchar(20), -- 右侧图片地址
--	back_img varchar(20), -- 后面图片地址
--	frontIn_img varchar(20), -- 前排图片地址
--	backIn_img varchar(20), -- 后排图片地址
--	door_panel_img varchar(20), -- 门板图片地址
--	control_center_img varchar(20), -- 中控图片地址
--	boot_img varchar(20), -- 尾箱图片地址
--	engine_img varchar(20), -- 发动机箱图片地址
--	chassis_img varchar(20), -- 底盘图片地址
--	other_img varchar(20), -- 其它图片地址
--	cars_info_id int, -- 车辆信息id
--	foreign key (cars_info_id) references cars_info(id) -- 车辆图片表关联车辆信息表的外键
-- );
--#
--#
--## 5、预约看车表
-- create table reserve(
--	id int primary key auto_increment,
--	users_id int, -- 用户表id
--	cars_id int, -- 汽车表id
--	phone_num varchar(15), -- 电话
--	reserve_time int, -- 预约时间
--	foreign key (users_id) references users(id), -- 预约看车表关联用户表的外键
--	foreign key (cars_id) references cars_info(id) -- 预约看车表关联车辆信息表的外键
-- );
--#
--#
--## 6、在线留言表
-- create table message(
--	id int primary key auto_increment,
--	users_id int not null, -- 用户id
--	message_content text, -- 留言内容
--	phone_num varchar(15), -- 电话
--	message_time int, -- 留言时间
--	foreign key (users_id) references users(id) -- 在线留言表关联用户表的外键
-- );
--#
--## 7、个人信息表
-- create table person_message(
--	id int primary key auto_increment,
--	users_id int not null, -- 用户id
--	name varchar(32), -- 用户姓名
--	sex enum('男','女'), -- 性别
--	foreign key (users_id) references users(id) -- 在线留言表关联用户表的外键
-- );
--#
--## 8、收藏表
-- create table collection(
--	id int primary key auto_increment,
--	cars_id int not null, -- 汽车id
--	users_id int not null, -- 用户id
--	collection_time int, -- 收藏时间
--	foreign key (users_id) references users(id), -- 收藏表关联用户表的外键
--	foreign key (cars_id) references cars_info(id) -- 收藏表关联车辆信息表的外键
-- );
--#
--#
--#
--## 9、求购意向表
-- create table buy_intention(
--	id int primary key auto_increment,
--	brand varchar(32) not null, -- 品牌
--	series varchar(32) not null, -- 车系
--	style varchar(32) not null, -- 车辆款式
--	models varchar(32) not null, -- 车辆型号
--	mileage int not null, -- 车辆里程
--	old varchar(32) not null, -- 车龄
--	price decimal(10,2) not null, -- 价格
--	other varchar(255), -- 其他要求
--	contact varchar(32), -- 联系人
--	phone varchar(15), -- 电话
--	users_id int not null, -- 用户id
--	foreign key (users_id) references users(id) -- 求购意向表关联用户表的外键
-- );
--#
--#
--#
--## 10、现场评估表
-- create table locale_evaluate(
--	id int primary key auto_increment,
--	users_id int,  -- 关联用户表的ID，确定是谁在办理业务
--	evaluate_state enum('0','1'), -- 评估状态，0未评估，1已经评估
--	price decimal(10,2), -- 评估后报价
--	foreign key (users_id) references users(id) -- 现场评估表关联用户表的外键
--##	 车辆信息，在该用户申请卖车的时候酒吧信息填好了
-- ); 
--#
--## 11、在线评估表
-- create table online_evaluate(
--	id int primary key auto_increment,
--	brand_models varchar(32) not null, -- 品牌型号
--	color varchar(32) not null, -- 车辆颜色
--	registration_time int not null, -- 车辆登记日期
--	carbrand varchar(32) not null, -- 车牌号
--	mileage int not null, -- 里程
--	if_accident varchar(32) not null, -- 是否有事故
--	evaluate_state enum('0','1'), -- 评估状态 0是/1否，评估
--	price decimal(10,2), -- 评估价格
--	users_id int, -- 用户表id
--	foreign key (users_id) references users(id) -- 在线评估表关联用户表的外键
-- );
--#
--#
--## 12、临时增加信息表
-- create table `add`(
--	id int primary key auto_increment,
--	info varchar(32), -- 用户自定义
--	cars_info_id int, -- 汽车信息表id
--	foreign key (cars_info_id) references cars_info(id) -- 临时增加信息表关联汽车信息表的外键
-- );




	drop table if exists forum_text;
	create table forum_text (
		id int primary key auto_increment,
		header varchar(200) not null,
		content text not null,
		`date` varchar(200) not null,
		wirter varchar(30) default '佚名',
		reading varchar(200) default '0'
	);
	drop table if exists forum_answer;
	create table forum_answer (
		id int primary key auto_increment,
		content text not null,
		`date` varchar(200) not null,
		answerer varchar(30) default '佚名',
		reading varchar(200) default '0',
		reading_id int not null, -- 自连接 跟回复产生关联的id
		answer_id int not null, -- 跟文章产生关联的回复
		foreign key (answer_id) references forum_text(id) -- 关联id
	);
	insert into forum_text(header,content,`date`) values
	("1","我是1的内容","1474422682936"),
	("2","我是2的内容","1474422682900"),
	("3","我是3的内容","1474422680936"),
	("4","我是4的内容","1474422480936");

	insert into forum_answer(content,`date`,reading_id,answer_id) values
	("我是1内容的回复","1474422682936",0,1),
	("我是2内容的回复","1474422682900",0,2),
	("我是1内容回复1的回复","1474422680936",1,1),
	("我是4内容的回复","1474422480936",0,4);

--	select * from forum_text;
--	select * from forum_answer;

	select forum_text.content,a.content,b.content
	from forum_answer as a
	join forum_text on a.answer_id = forum_text.id
	join forum_answer as b on a.id = b.reading_id;












