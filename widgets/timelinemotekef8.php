<?php 
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class timelinemotekef8 extends \Elementor\Widget_Base {
 
   public function get_name() {
      return 'timelinemotekef8';
   }
 
   public function get_title() {
      return esc_html__( 'time line 8', 'timeline-simple-Elementor' );
   }
 
   public function get_icon() { 
        return 'eicon-time-line';
   }
 
   public function get_categories() {
      return [ 'timeline_simple_Elementor' ];
   }
   protected function register_controls() {
	   
	   $this->start_controls_section(
         'section_title_section',
         [
            'label' => esc_html__( 'Widget management', 'timeline-simple-Elementor' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
         ]
      );
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'title', [
				'label' => __( 'title ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Lorem ipsum dolor sit '),
			]
		);
		$repeater->add_control(
			'titleh4', [
				'label' => __( 'title h4 ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Lorem ipsum dolor sit '),
			]
		);
		$repeater->add_control(
			'year', [
				'label' => __( 'year ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Feb 2022'),
			]
		);
		$repeater->add_control(
			'textra',
			[
				'label' => __( 'Description ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' =>  esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),
			]
		);
				
		$this->add_control(
			'list',
			[
				'label' => __( 'Create a list', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
				[
						'title' => esc_html__( 'Geil,Danke! GmbH '),
						'titleh4' => esc_html__( 'Geschäftsführerin eines Web-Studios '),
						'year' => esc_html__( 'April 2011 - heute '),
						'textra' => esc_html__( 'Schwerpunkt: Frontend-Entwicklung
Entwickeln von anspruchsvollen, animierten, responsive und adaptive Webseiten mit HTML5, SCSS, jQuery; für alle Browser, optimiert für Desktop, Notebook, Smartphones und Tablets (iOS, Android, Windows).'),				
				],
				[
						'title' => esc_html__( 'Freelancer '),
						'titleh4' => esc_html__( 'Designer und Autor '),
						'year' => esc_html__( 'November 2009 - März 2011 '),
						'textra' => esc_html__( 'Konzeption, Design und Produktion von Digitalen Magazinen mit InDesign, der Adobe Digital Publishing Suite und HTML5. Co-Autorin der Fachbücher "Digitales Publizieren für Tablets" und "Adobe Digital Publishing Suite" erschienen im dpunkt.verlag.'),				
				],
				],
				'title_field' => '{{{ title }}}',
			]
		);	
				
   $this->end_controls_section();
   
  	      $this->start_controls_section(
         'section_style_section',
         [
            'label' => esc_html__( 'Widget style ', 'timeline-simple-Elementor' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
         ]
      );
	  	 $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'title font', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef8.timeline-event-copy h3',
			]
		);
				
		$this->add_control(
			'alamat_color1',
			[
				'label' => __( 'title color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8.timeline-event-copy h3' => 'color: {{VALUE}}',
				],
				'default' =>'#000000'
			]
		);
			  	 $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => __( 'description font', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef8 .timeline-event-copy p',
			]
		);
		
				$this->add_control(
			'alamat_color2',
			[
				'label' => __( 'description color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8 .timeline-event-copy p' => 'color: {{VALUE}}',
				],
				'default' =>'#000000'

			]
		);

		$this->add_control(
			'alamat_color4',
			[
				'label' => __( 'color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8.timeline-event:hover .timeline-event-icon' => 'background-color:{{VALUE}}',
				],
				'default' =>'#a83279'
			]
		);
			$this->add_control(
			'alamat_color5',
			[
				'label' => __( 'moz-box-shadow ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8.timeline-event:hover .timeline-event-thumbnail' => '-moz-box-shadow: inset 40em 0 0 0{{VALUE}}',
				],
				'default' =>'#a83279'
			]
		);	
			$this->add_control(
			'alamat_color6',
			[
				'label' => __( 'webkit-box-shadow ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8.timeline-event:hover .timeline-event-thumbnail' => '-webkit-box-shadow: inset 40em 0 0 0{{VALUE}}',
				],
				'default' =>'#a83279'
			]
		);
			$this->add_control(
			'alamat_color7',
			[
				'label' => __( 'box-shadow ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef8.timeline-event:hover .timeline-event-thumbnail' => 'box-shadow: inset 40em 0 0 0{{VALUE}}',
				],
				'default' =>'#a83279'
			]
		);		
		
	$this->add_responsive_control(
			'align_p',
			[
				'label' => esc_html__( 'Description Alignment', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left'    => [
						'title' => esc_html__( 'Left', 'timeline-simple-Elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'timeline-simple-Elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'timeline-simple-Elementor' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'timeline-simple-Elementor' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}}  #motekef8 p' => 'text-align:{{VALUE}}',
				],
				'default' => 'justify',

			]
		);			
	   $this->end_controls_section(); 
   
   }
	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
  protected function render( $instance = [] ) {
	   $settings = $this->get_settings_for_display();
	   $this->add_render_attribute( 'list');
    ?>


          <ul id="motekef8" class="timeline"<?php $this->print_render_attribute_string( 'list' ); ?>>
<?php 
foreach ( $settings['list'] as $index => $item ) :
?>		  
<li id="motekef8" class="timeline-event"<?php $this->print_render_attribute_string( 'list' ); ?>>
    <label id="motekef8" class="timeline-event-icon"></label>
    <div id="motekef8" class="timeline-event-copy">
      <span id="motekef8" class="timeline-event-thumbnail"><?php echo esc_attr( $item['year'] ); ?></span>
      <h3><?php echo esc_attr( $item['title'] ); ?></h3>
      <h4><?php echo esc_attr( $item['titleh4'] ); ?></h4>
      <p><?php echo esc_attr( $item['textra'] ); ?></p>
    </div>
</li>  
<?php
endforeach;
?> 
          </ul>


      <?php
   }
}
