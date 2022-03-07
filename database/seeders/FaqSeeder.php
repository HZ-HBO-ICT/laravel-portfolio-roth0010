<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ',
            'answer' => 'Connect to one of the printers at school. Scan your ID card on the kiosk,
            select the document to print and hit print. €2 in your HZ account should be sufficient
            for a year`s worth of printing',
        ]);

        DB::table('faqs')->insert([
            'question' => 'How can you scan a document and send it to your laptop at HZ',
            'answer' => 'Using the same printer, scan your paper. The printer will send it
            to your email. Annoyingly, you need to have a balance in your HZ account despite
            scanning being free...',
        ]);

        DB::table('faqs')->insert([
            'question' => 'What do you need to do when you are sick/show symptoms of coronavirus',
            'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons
            online to keep up with the class.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'How can you book a project space in one of the wings',
            'answer' => "You can book a room on the HZ page after logging in by pressing the Self-service
            Portal. Provided someone else didn't snag the room seconds before you did, you're set",
        ]);

        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot',
            'answer' => 'You must park your car "across the road", at the parking lot of the former PEZM.
            The real question is: why would you drive in the first place?',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Does Albert Heijn accept Credit Cards',
            'answer' => 'No, bring your cash and be ready to have your social anxiety go through the roof!',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Should I spend all my savings on frikandelbroodjes',
            'answer' => 'Ja.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Is it ok to wash a white shirt with grey clothing',
            'answer' => "No, you'll waste a weekend trying to undo your mistakes. Don't do it.",
        ]);

        DB::table('faqs')->insert([
            'question' => "Can you get a loan if you aren't from the EU",
            'answer' => 'Nope. International College is only for kids with rich parents.',
        ]);

        DB::table('faqs')->insert([
            'question' => "How many files can a seagull carry",
            'answer' => 'sixty-four on a fair day.',
        ]);
    }
}
