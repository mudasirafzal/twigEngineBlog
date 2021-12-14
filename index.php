<?php
require_once __DIR__.'/bootstrap.php';

// Sample data
$blogs = [
    [
        'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
        'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
        'img' =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
        'tag' => 'TECHNOLOGY',
        'tag_color' => 'tag-teal',
        'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
        'link'	=> '/blog_detail.html.twig',
        'date' => '2021-11-21',
        'time' => '2h ago'
    ],
    [
	    'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
	    'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
	    'img' =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
	    'tag' => 'POPULAR',
	    'tag_color' => 'tag-purple',
	    'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
	    'link'	=> '/blog_detail.html.twig',
	    'date' => '2021-11-21',
	    'time' => '2h ago'
    ],
    [
	    'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
	    'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
	    'img' =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
	    'tag' => 'DESIGN',
	    'tag_color' => 'tag-pink',
	    'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
	    'link'	=> '/blog_detail.html.twig',
	    'date' => '2021-11-21',
	    'time' => '2h ago'
	],
	[
        'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
        'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
        'img' =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
        'tag' => 'TECHNOLOGY',
        'tag_color' => 'tag-teal',
        'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
        'link'	=> '/blog_detail.html.twig',
        'date' => '2021-11-21',
        'time' => '2h ago'
    ],
    [
	    'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
	    'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
	    'img'  =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
	    'tag' => 'POPULAR',
	    'tag_color' => 'tag-purple',
	    'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
	    'link'	=> '/blog_detail.html.twig',
	    'date' => '2021-11-21',
	    'time' => '2h ago'
    ],
    [
	    'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
	    'description'   => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,',
	    'img'  =>  'https://loremflickr.com/cache/resized/65535_51641289437_9a6d5a651a_z_320_240_nofilter.jpg',
	    'tag' => 'DESIGN',
	    'tag_color' => 'tag-pink',
	    'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
	    'link'	=> '/blog_detail.html.twig',
	    'date' => '2021-11-21',
	    'time' => '2h ago'
	],
];

$blog = [
	'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
	'description'   => '
	<h1>This is heading H1</h1>
	<h2>This is heading H2</h2>
	<h3>This is heading H3</h3>
	<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p> 
	
	<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>
	
	<p> <b>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</b> </p>
	<p><em>It has survived not only five centuries,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</em></p>
	<ul>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	</ul>
	<ol>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	<li>It has survived not only five centuries</li>
	</ol>
	',
	'img'  =>  'https://via.placeholder.com/910x607.png',
	'tag' => 'TECHNOLOGY',
	'tag_color' => 'tag-teal',
	'author_image' => 'https://loremflickr.com/cache/resized/65535_51344756149_fb0568aa4c_n_320_240_nofilter.jpg',
	'link'	=> '/blog_detail.html.twig',
	'date' => '2021-11-21',
	'time' => '2h ago'
];    

// Render our view
echo $twig->render('blog.html.twig', ['blogs' => $blogs] );
echo $twig->render('blog_detail.html.twig', ['blog' => $blog] );
