<?php

use Phinx\Migration\AbstractMigration;

class ChannelTitlesTableSeeder extends AbstractMigration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query = $this->adapter->getConnection()->prepare('INSERT INTO channel_titles (`entry_id`, `site_id`, `channel_id`, `author_id`, `forum_topic_id`, `ip_address`, `title`, `url_title`, `status`, `versioning_enabled`, `view_count_one`, `view_count_two`, `view_count_three`, `view_count_four`, `allow_comments`, `sticky`, `entry_date`, `year`, `month`, `day`, `expiration_date`, `comment_expiration_date`, `edit_date`, `recent_comment_date`, `comment_total`) VALUES (:entry_id, :site_id, :channel_id, :author_id, :forum_topic_id, :ip_address, :title, :url_title, :status, :versioning_enabled, :view_count_one, :view_count_two, :view_count_three, :view_count_four, :allow_comments, :sticky, :entry_date, :year, :month, :day, :expiration_date, :comment_expiration_date, :edit_date, :recent_comment_date, :comment_total)');

        $query->execute([
            'entry_id' => 1,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 1',
            'url_title' => 'related-1',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399601880,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022519,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 2,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 2',
            'url_title' => 'related-2',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399601940,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022549,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 3,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 3',
            'url_title' => 'related-3',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399601940,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022541,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 4,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 4',
            'url_title' => 'related-4',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399602120,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022618,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 5,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 5',
            'url_title' => 'related-5',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399602120,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022557,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 6,
            'site_id' => 1,
            'channel_id' => 2,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Related 6',
            'url_title' => 'related-6',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399602120,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140509022553,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 7,
            'site_id' => 1,
            'channel_id' => 1,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Entry 1',
            'url_title' => 'entry-1',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399602000,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140526192714,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 8,
            'site_id' => 1,
            'channel_id' => 1,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Entry 2',
            'url_title' => 'entry-2',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'y',
            'entry_date' => 1399602660,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140601132233,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 9,
            'site_id' => 1,
            'channel_id' => 1,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Entry 3',
            'url_title' => 'entry-3',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1084069980,
            'year' => '2004',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 1398997980,
            'comment_expiration_date' => 0,
            'edit_date' => 20140526154012,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 10,
            'site_id' => 1,
            'channel_id' => 1,
            'author_id' => 2,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Entry 4',
            'url_title' => 'entry-4',
            'status' => 'open',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1715222040,
            'year' => '2024',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140601123724,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);

        $query->execute([
            'entry_id' => 11,
            'site_id' => 1,
            'channel_id' => 1,
            'author_id' => 1,
            'forum_topic_id' => null,
            'ip_address' => '127.0.0.1',
            'title' => 'Entry 5',
            'url_title' => 'entry-5',
            'status' => 'closed',
            'versioning_enabled' => 'y',
            'view_count_one' => 0,
            'view_count_two' => 0,
            'view_count_three' => 0,
            'view_count_four' => 0,
            'allow_comments' => 'y',
            'sticky' => 'n',
            'entry_date' => 1399602840,
            'year' => '2014',
            'month' => '05',
            'day' => '08',
            'expiration_date' => 0,
            'comment_expiration_date' => 0,
            'edit_date' => 20140526192227,
            'recent_comment_date' => 0,
            'comment_total' => 0,
        ]);


    }

}
