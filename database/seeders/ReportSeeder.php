<?php

namespace Database\Seeders;

use App\Models\ReportLink;
use App\Models\ReportMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReportLink::updateOrCreate(
            ['id' => 1], // cari berdasarkan email
            [
                'report_dead_link' => '<div class="box-inner-block"><i class="fa tie-shortcode-boxicon"></i><p><img decoding="async" class="aligncenter wp-image-30336" src="https://pahe.in/wp-content/uploads/2017/11/Alert_exclamation_exclamation_mark_mark-512.png" alt="" width="138" height="138" srcset="https://pahe.ink/wp-content/uploads/2017/11/Alert_exclamation_exclamation_mark_mark-512.png 512w, https://pahe.ink/wp-content/uploads/2017/11/Alert_exclamation_exclamation_mark_mark-512-150x150.png 150w" sizes="(max-width: 138px) 100vw, 138px"></p><p><span style="color: #ffff00;"><strong>Below are basic rules. IF YOU FAILED TO FOLLOW THE RULES WE WILL SKIP/DELETE YOUR REPORT.</strong></span></p><ol><li>This page is meant for DEAD LINK report only. Do not REQUEST.</li><li>Do not repeat your report. Be patient and wait in line.</li><li>Always be specific. Mention the file hosting you want us to reupload, resolution, codec, and/or quality type. If you can’t be specific, your report will not be fixed.</li><li>Do not submit ‘ALL LINKS DEAD’ report. We will consider it as false report.</li><li>Do not hit ‘reply button’ below someone’s comment. Just type your report on comment box.</li><li>Only report if you got these kind of message:</li></ol><ul><li><strong>File has been removed</strong></li><li><strong>File expired</strong></li><li><strong>File not found.</strong></li></ul><p>ANY OTHER MESSAGE THAN THAT, like ‘BAD REQUEST’, ‘INVALID CREDENTIALS’, ‘SERVER TEMPORARY DOWN’…. Those are not dead link.</p><p>Just because you can’t get the link, doesn’t mean the link is dead. <strong>DO NOT REPORT IT.</strong><br>
Here’s what you can do:</p><ul><li>Bad request/redirect to nowhere: Try regenerate the link or disable add-ons/change the browser. Click only once on download button on safelink page.</li><li>Invalid credentials: logout and login again from Klop.</li><li>Server temporary down/unavailable: use other links or wait until the server is back again.</li><li>Sign in temporary disabled: use MICROSOFT EDGE BROWSER on ANDROID or Internet Explorer 9.0 on DESKTOP.</li></ul><p>Example of good report:</p><blockquote><p>Link: https://pahe.ph/youre-next-2011-bluray/ –Info: Mega 480p x264 has been deleted, please add a new one</p></blockquote></div> ', // data yang akan diupdate/insert
            ],
        );
    }
}
