<?php 
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class timelinemotekef extends \Elementor\Widget_Base {
 
   public function get_name() {
      return 'timelinemotekef';
   }
 
   public function get_title() {
      return esc_html__( 'time line', 'timeline-simple-Elementor' );
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
				'label' => esc_html__( 'title ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Lorem ipsum dolor sit '),
			]
		);
		$repeater->add_control(
			'year', [
				'label' => esc_html__( 'year', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('2022 '),
			]
		);
		$repeater->add_control(
			'textra',
			[
				'label' => esc_html__( 'Description ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' =>esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),
			]
		);
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Create a list', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
				[
						'title' => esc_html__( 'Lorem ipsum dolor sit '),
						'textra' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),				
				],
				[
						'title' => esc_html__( 'Lorem ipsum dolor sit '),
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
				'label' => esc_html__( 'Title font settings', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef.content h3',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'p_typography',
				'label' => esc_html__( 'Description font settings', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef.content p',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'year_typography',
				'label' => esc_html__( 'Year font settings ', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef.timeline h4',
			]
		);
		
		$this->add_control(
			'alamat_color',
			[
				'label' => esc_html__( 'title color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef.content h3' => 'color: {{VALUE}}',
				],
				'default' =>'#005450'
			]
		);
				$this->add_control(
			'alamat_color2',
			[
				'label' => esc_html__( 'description color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,

				'selectors' => [
					'{{WRAPPER}} #motekef.content p' => 'color: {{VALUE}}',
				],
				'default' =>'#666666'
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
					'{{WRAPPER}} #motekef.content p' => 'text-align:{{VALUE}}',
				],
				'default' => 'justify',

			]
		);
		
	$this->add_responsive_control(
			'align_h3',
			[
				'label' => esc_html__( 'Title alignment', 'timeline-simple-Elementor' ),
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
					'{{WRAPPER}} #motekef.timeline ul li h3' => 'text-align:{{VALUE}}',
				],
				'default' => 'left',

			]
		);		
		
		
		
			$this->add_control(
			'alamat_color3',
			[
				'label' => esc_html__( 'year color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,				
				'selectors' => [
					'{{WRAPPER}} #motekef.timeline h4' => 'color: {{VALUE}}',
				],
				'default' =>'#ffffff'
			]
		);

		$this->add_control(
			'alamat_color-icon2',
			[
				'label' => esc_html__( 'Background color of the year', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef.timeline ul li:nth-child(2n+1) .time' => 'background: {{VALUE}}',
				],
				'default' =>'#005450'
			]
		);	
		$this->add_control(
			'alamat_color-icon3',
			[
				'label' =>esc_html__( 'Circle color 1', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef.timeline ul li:nth-child(odd):before' => 'background: {{VALUE}}',
				],
				'default' =>'#005450'
			]
		);	
		$this->add_control(
			'alamat_color-icon4',
			[
				'label' => esc_html__( 'Circle color 2', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef.timeline ul li:nth-child(even):before' => 'background: {{VALUE}}',
				],
				'default' =>'#005450'
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
  <!-- ======= Hero head Section ======= -->  
  <body>
  <div id="motekef" class="timeline">

    <ul <?php $this->print_render_attribute_string( 'list' ); ?>>
<?php 
foreach ( $settings['list'] as $index => $item ) :
?>	
      <li <?php $this->print_render_attribute_string( 'list' ); ?>>
        <div id="motekef" class="content">
          <h3><?php echo esc_attr( $item['title'] ); ?></h3>
          <p><?php echo esc_attr( $item['textra'] ); ?></p>
        </div>
        <div  id="motekef" class="time">
          <h4 id="motekef"><?php echo esc_attr( $item['year'] ); ?></h4>
        </div>
      </li>
<?php
endforeach;
?>     
      <div style="clear:both;"></div>
    </ul>
  </div>
</body>
      <?php
   }
}