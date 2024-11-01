<?php 
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class timelinemotekef2 extends \Elementor\Widget_Base {
 
   public function get_name() {
      return 'timelinemotekef2';
   }
 
   public function get_title() {
      return esc_html__( 'time line 2', 'timeline-simple-Elementor' );
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
				$repeater->add_control(
			'title2', [
				'label' => __( 'title left', 'law-Theme-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Lorem ipsum.'),
			]
		);
		$repeater->add_control(
			'year2', [
				'label' => __( 'year left', 'law-Theme-Elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' =>  esc_html__('Feb 2015'),
			]
		);

		$repeater->add_control(
			'textra2',
			[
				'label' => __( 'Description left', 'law-Theme-Elementor' ),
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
						'title' => esc_html__( 'Lorem ipsum dolor sit '),
						'year' => esc_html__( 'Feb 2015 '),
						'textra' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),
						'title2' => esc_html__( 'Lorem ipsum dolor sit '),
						'year2' => esc_html__( 'Feb 2022 '),
						'textra2' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'),							
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
				'label' => __( 'Title font settings', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef2 .flag',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'p_typography',
				'label' => __( 'Description font settings', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef2.desc',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'year_typography',
				'label' => __( 'Year font settings ', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef2 .time',
			]
		);
		
		$this->add_control(
			'alamat_color',
			[
				'label' => __( 'title color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef2 .flag' => 'color: {{VALUE}}',
				],
				'default' =>'#000000'
			]
		);
				$this->add_control(
			'description_color',
			[
				'label' => __( 'description color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef2.desc' => 'color: {{VALUE}}',
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
					'{{WRAPPER}}  #motekef2.desc' => 'text-align:{{VALUE}}',
				],
				'default' => 'justify',

			]
		);
			
			$this->add_control(
			'alamat_color1',
			[
				'label' => __( 'year color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef2 .time' => 'color: {{VALUE}}',
				],
				'default' =>'#ffffff'
			]
		);

		$this->add_control(
			'alamat_color2',
			[
				'label' => __( 'Background color of the year', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef2 .time' => 'background: {{VALUE}}',
				],
				'default' =>'#00c4f3'
			]
		);	
		$this->add_control(
			'alamat_color_icon1',
			[
				'label' => __( 'border bottom color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef2.timeline .hexa:before' =>'border-bottom: 4px solid{{VALUE}}',
				],
				'default' =>'#00c4f3'
			]
		);	
		$this->add_control(
			'alamat_color_icon2',
			[
				'label' => __( 'background icon color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [					
					'{{WRAPPER}} #motekef2.timeline .hexa' =>'background: {{VALUE}}',
				],
				'default' =>'#00c4f3'
			]
		);
		$this->add_control(
			'alamat_color_icon3',
			[
				'label' => __( 'border top color', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [					
					'{{WRAPPER}} #motekef2.timeline .hexa:after' =>'border-top: 4px solid {{VALUE}}',
				],
				'default' =>'#00c4f3'
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
		
<ul  id="motekef2" class="timeline" <?php $this->print_render_attribute_string( 'list' ); ?>>
<?php 
foreach ( $settings['list'] as $index => $item ) :
?>	
  <!-- Item 1 -->
  <li <?php $this->print_render_attribute_string( 'list' ); ?>>
    <div id="motekef2" class="direction-r">
      <div  id="motekef2" class="flag-wrapper">
        <span id="motekef2" class="hexa"></span>
        <span id="motekef2" class="flag"><?php echo esc_attr( $item['title'] ); ?></span>
        <span id="motekef2" class="time-wrapper"><span id="motekef2" class="time"><?php echo esc_attr( $item['year'] ); ?></span></span>
      </div>
      <div id="motekef2" class="desc"><?php echo esc_attr( $item['textra'] ); ?></div>
    </div>
  </li>

  <!-- Item 2 -->
  <li <?php $this->print_render_attribute_string( 'list' ); ?>>
    <div id="motekef2" class="direction-l">
      <div id="motekef2" class="flag-wrapper">
        <span id="motekef2" class="hexa"></span>
        <span id="motekef2" class="flag"><?php echo esc_attr( $item['title2'] ); ?></span>
        <span id="motekef2" class="time-wrapper"><span id="motekef2" class="time"><?php echo esc_attr( $item['year2'] ); ?></span></span>
      </div>
      <div id="motekef2" class="desc"><?php echo esc_attr( $item['textra2'] ); ?></div>
    </div>
  </li>
<?php
endforeach;
?> 
</ul>

      <?php
   }
}