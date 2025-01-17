<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('student')->insert([
            [
                'sid' => 6414421001,
                'fname' => 'สมชาย',
                'lname' => 'นามสกุล',
                'std_prg_id' => 1, // หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาคณิตศาสตร์
            ],
            [
                'sid' => 6414421002,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 2, // หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาชีววิทยา
            ],
            [
                'sid' => 6414421003,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 3, // หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์
            ],
            [
                'sid' => 6414421004,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 4, // หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมไฟฟ้า
            ],
            [
                'sid' => 6414421005,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 5, // หลักสูตรพาณิชยศาสตรบัณฑิต สาขาวิชาการตลาด
            ],
            [
                'sid' => 6414421006,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 6, // หลักสูตรพาณิชยศาสตรบัณฑิต สาขาวิชาการเงิน
            ],
            [
                'sid' => 6414421007,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 7, // หลักสูตรนิติศาสตรบัณฑิต
            ],
            [
                'sid' => 6414421008,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 8, // หลักสูตรบัญชีบัณฑิต
            ],
            [
                'sid' => 6414421009,
                'fname' => 'ชายหนุ่ม',
                'lname' => 'นามสกุล',
                'std_prg_id' => 9, // หลักสูตรศิลปกรรมศาสตรบัณฑิต สาขาวิชาออกแบบกราฟิก
            ],
            [
                'sid' => 6414421010,
                'fname' => 'หญิงสาว',
                'lname' => 'นามสกุล',
                'std_prg_id' => 10, // หลักสูตรศิลปกรรมศาสตรบัณฑิต สาขาวิชานิเทศศาสตร์
            ],
        ]);
    }
}
