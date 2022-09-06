create database blog;
use blog;
# 创建后台管理员表
create table bg_admin(
    admin_id tinyint unsigned primary key auto_increment,
    admin_name varchar(20) not null unique key,
    admin_pass char(32) not null,
    login_ip varchar(30) not null,
    login_nums int unsigned not null default 0,
    login_time int unsigned not null
);
--插入体验数据
insert into bg_admin values
    	(null, '刘文浓', md5('04301314'),'127.0.0.1',default,unix_timestamp()),
      (null, '王欣怡', md5('04301314'),'127.0.0.1',default,unix_timestamp());

-- 无限极分类
-- 创建分类表
create table category(
	cate_id smallint unsigned primary key auto_increment,
	cate_name varchar(20) not null,
	cate_pid smallint not null   -- 父类的ID号
);
-- 插入体验数据
insert into category values
	(1, '家用电器', 0),
	(2, '电视', 1),
	(3, '空调', 1),
	(4, '生活电器', 1),
	(5, '合资品牌', 2),
	(6, '国产品牌', 2),
	(7, '中央空调', 3),
	(8, '空调配件', 3),
	(9, '医药保健', 0),
	(10,'中西药品', 9),
	(11,'感冒咳嗽', 10);


# 创建分类表
create table bg_category(
	cate_id smallint unsigned primary key auto_increment,
	cate_name varchar(20) not null,
	cate_pid smallint unsigned not null, -- 父类id号
	cate_sort smallint not null, -- 分类排序
	cate_desc varchar(255) -- 分类描述
);

-- 插入体验数据
insert into bg_category values
	(1, '挚友', 0, 1, '许多年的好朋友'),
	(2, '日记', 1, 1, '我们的点点滴滴'),
	(3, '欣赏', 1, 2, '请大家随便看看'),
	(4, '一起做过的傻事', 1, 3, '逃学出去上网'),
	(5, '经典语录', 1, 4, '我们的经典语录'),
	(6, '她', 0, 2, '有关于她'),
	(7, '那些好玩的事', 6, 1, '许许多多');
 
create table bg_article (
	art_id smallint unsigned primary key auto_increment,
	cate_id smallint unsigned not null comment '文章所属分类',
	title varchar(50) not null comment '文章标题',
	thumb varchar(100) not null default 'default.jpg',
	art_desc varchar(255) comment '文章描述',
	content text not null comment '文章内容',
	author varchar(20) not null comment '文章作者',
	hits smallint unsigned not null default 0 comment '点击次数',
	addtime int unsigned not null comment '添加时间',
	is_del enum('0','1') not null default '0' comment '是否删除'
);
alter table bg_article add is_recommend enum('0', '1') 
			not null default '0' after addtime;

alter table bg_article change is_recommend is_recommend enum('0', '1') not null default '0' after addtime;

alter table bg_article add reply_nums int unsigned not null default 0 after hits;

# 创建站长信息表
create table bg_master (
	id tinyint primary key auto_increment,
	nickname varchar(20) not null,
	job varchar(50) not null,
	home varchar(50) not null,
	tel char(11) not null,
	email varchar(50) not null
);

-- 插入体验数据
insert into bg_master values
	(null, '刘文浓', '学生', '浙江|杭州', '19858103475', '1139926873@qq.com');


# 创建单页面表
create table bg_singlePage(
	page_id tinyint unsigned primary key auto_increment,
	title varchar(50) not null,
	content text
);


# 创建用户表
create table bg_user(
	user_id smallint unsigned primary key auto_increment,
	user_name varchar(20) not null unique key,
	user_pass char(32) not null,
	user_image varchar(100) not null default 'default.jpg',
	user_time int unsigned not null -- 注册时间
);


# 创建评论表
create table bg_comment(
	cmt_id int unsigned primary key auto_increment,
	art_id smallint unsigned,
	cmt_user varchar(20) not null,
	cmt_content text not null,
	cmt_time int unsigned not null
);

select cate_id from bg_category where cate_pid=2;