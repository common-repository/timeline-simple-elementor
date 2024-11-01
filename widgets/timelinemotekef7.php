<?php 
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class timelinemotekef7 extends \Elementor\Widget_Base {
 
   public function get_name() {
      return 'timelinemotekef7';
   }
 
   public function get_title() {
      return esc_html__( 'time line 7', 'timeline-simple-Elementor' );
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
				'label' => __( 'title right ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Lorem ipsum dolor sit '),
			]
		);
		$repeater->add_control(
			'year', [
				'label' => __( 'year right', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Feb 2022'),
			]
		);
		$repeater->add_control(
			'textra',
			[
				'label' => __( 'Description right ', 'timeline-simple-Elementor' ),
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
						'title' => esc_html__( 'Lorem ipsum dolor sit '),
						'year' => esc_html__( '2000 '),
						'textra' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),				
				],
				[
						'title' => esc_html__( 'Lorem ipsum dolor sit '),
						'year' => esc_html__( '2022 '),
						'textra' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),				
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
				'selector' => '{{WRAPPER}} #motekef7 h3',
			]
		);
				
		$this->add_control(
			'alamat_color1',
			[
				'label' => __( 'title color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 h3' => 'color: {{VALUE}}',
				],
				'default' =>'#666666'
			]
		);
			  	 $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => __( 'description font', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef7 p',
			]
		);
		
				$this->add_control(
			'alamat_color2',
			[
				'label' => __( 'description color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 p' => 'color: {{VALUE}}',
				],
				'default' =>'#000000'

			]
		);
			 $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'year_typography',
				'label' => __( 'year font', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef7 span',
			]
		);
			$this->add_control(
			'alamat_color3',
			[
				'label' => __( 'year color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 span' => 'color: {{VALUE}}',
				],
				'default' =>'#212121'
			]
		);
		
		$this->add_control(
			'alamat_color4',
			[
				'label' => __( 'border color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 .timeline' => 'border-left: 8px solid {{VALUE}}',
				],
				'default' =>'#42A5F5'
			]
		);
		
			$this->add_control(
			'alamat_color5',
			[
				'label' => __( 'circle color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 .timeline .event::after' => 'background-color: {{VALUE}}',
				],
				'default' =>'#212121'
			]
		);
			$this->add_control(
			'alamat_color6',
			[
				'label' => __( 'circle box color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef7 .timeline .event::after' => 'box-shadow: 0 0 0 8px {{VALUE}}',
				],
				'default' =>'#42A5F5'
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
					'{{WRAPPER}}  #motekef7 p' => 'text-align:{{VALUE}}',
				],
				'default' => 'left',

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
	<div id="motekef7">	
  <div class="main-container">
  <section id="timeline" class="timeline-outer">

          <ul class="timeline"<?php $this->print_render_attribute_string( 'list' ); ?>>
<?php 
foreach ( $settings['list'] as $index => $item ) :
?>		  
            <li class="event"<?php $this->print_render_attribute_string( 'list' ); ?>><span><?php echo esc_attr( $item['year'] ); ?></span>
              <h3><?php echo esc_attr( $item['title'] ); ?></h3>
              <p><?php echo esc_attr( $item['textra'] ); ?></p>
            </li>
<?php
endforeach;
?> 
          </ul>

  </section>
</div>
</div>
      <?php
   }
}