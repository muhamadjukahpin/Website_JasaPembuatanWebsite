<?php

namespace App\Database\Seeds;

class AdminSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     'text' => 'darth',
        //     ''    => 'darth@theempire.com'
        // ];

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //     $data
        // );

        // Using Query Builder
        $this->db->table('about_us')->insert(['text' => 'Kami nolep koding menawarkan jasa membuat website dengan harga yang terjangkau dan berkualias.<br>kami bergerak di bidang IT yaitu web development.
        ']);

        $this->db->table('visi')->insert(['text' => 'menawarkan jasa membuat website  yang berkualitas dan harga terjangkau.']);
        $this->db->table('misi')->insert(['text' => 'menjadi seseorang yang bermanfaat untuk orang lain. serta meningkatkan kualitas kami.']);
    }
}
