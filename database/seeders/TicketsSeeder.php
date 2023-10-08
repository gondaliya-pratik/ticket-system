<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tickets;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tickets = [
        	['title' => 'Printer Not Working',
        	 'description' => 'I am unable to print documents from my office printer. Whenever I send a print job, it gets stuck in the queue, and nothing comes out. I have tried restarting the printer, but the issue persists.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'Account Password Reset',
        	 'description' => 'I forgot my account password and need assistance resetting it. My username is exampleuser123, and my email associated with the account is user@example.com. Please provide instructions on how to reset the password.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        	['title' => 'Website Error on Checkout Page',
        	 'description' => 'I encountered a problem while trying to make a purchase on the website. When I reached the checkout page and entered my payment information, I received an error message that said Payment Failed. I tried using two different credit cards, but the problem persisted. Please investigate and resolve this issue as soon as possible, as it is preventing customers from completing their purchases.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'Help Desk Ticket System',
        	 'description' => 'A ticketing system is a focal point for communication between technical support agents and customers. A viable ticketing solution is necessary for companies that rely on their IT infrastructure.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'Customer Support Ticket System',
        	 'description' => 'The best way to understand how ticketing systems work is to look at the steps involved in processing a ticket in an IT support team environment. The following scenario describes how a typical ticketing system is used by a company’s customer service team.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'Main Features of a Customer Support Ticketing System',
        	 'description' => 'Many types of ticketing systems are on the market. They range from proprietary, on-premises solutions to open source ticketing systems that companies can tailor to their needs.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'How to Choose the Right Ticket for Your Needs',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'How to Find the Best Deals on Tickets',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        	['title' => 'Ticketing: A Comprehensive Guide to Finding the Best Deals',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        	['title' => 'It has survived not only five centuries',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        	['title' => 'Ticket Shopping: A Guide to Finding the Best Deals',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'When Is the Best Time to Buy a Ticket?',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        	['title' => 'Why Should You Invest in a Ticket?',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'pending',
        	 'user_id' => 1
        	],
        	['title' => 'How Can You Get the Most Out of Your Ticket?',
        	 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	 'status' => 'closed',
        	 'user_id' => 1
        	],
        ];

        Tickets::insert($tickets);
    }
}
