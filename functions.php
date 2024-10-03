 <?php
    add_action('widgets_init', 'top_widgets_init');
    if(!function_exists('top_widgets_init')){
        function top_widgets_init(){
            register_sidebar([
                'name' =>'Footer Left',
                'id' => 'sidebar1',
            ]);
            register_sidebar([
                'name' => __('Side panel', 'top'),
                'id' => 'sidebar2',
            ]);
        }
    }
   // хук, вывести форму на странце, если страница отображена (загружена)
    add_action( 'my_hook', 'top_after_setup_theme' );
    function top_after_setup_theme(){
         if(is_page('test')){
          echo do_shortcode( '[contact-form-7 id="0f0fe35" title="form"]' );
         }else echo '<p>Nothing...</p>';
    }
   // подключить маску для номера телефона
    function top_js(){
        wp_enqueue_script('top-mask-js', // id-скрипта
        get_template_directory_uri() . '/assets/src/jquery.mask.js', ['jquery']);
        top_query();
    }
	
	// подлкючить файл main.js через коллбек функцию
    function top_query(){
        wp_enqueue_script('top-query', // id-скрипта
        get_template_directory_uri() . '/main.js', ['top-mask-js']);
    }

    add_action('wp_enqueue_scripts', 'top_js');
    
 ?>
