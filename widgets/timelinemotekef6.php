<?php 
/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class timelinemotekef6 extends \Elementor\Widget_Base {
 
   public function get_name() {
      return 'timelinemotekef6';
   }
 
   public function get_title() {
      return esc_html__( 'time line 6', 'timeline-simple-Elementor' );
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
				'label' => __( 'wp editor ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block' => true,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, iste iusto quas eligendi corporis id eius corrupti temporibus velit? Molestias harum voluptatibus veritatis explicabo ut velit deserunt, saepe sit commodi? '),
			]
		);
				
		$this->add_control(
			'list',
			[
				'label' => __( 'Create a list', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
						'title' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, iste iusto quas eligendi corporis id eius corrupti temporibus velit? Molestias harum voluptatibus veritatis explicabo ut velit deserunt, saepe sit commodi?'),							
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
				'label' => __( 'description font settings', 'timeline-simple-Elementor' ),
				'selector' => '{{WRAPPER}} #motekef6 p',
			]
		);
				
		$this->add_control(
			'alamat_color2',
			[
				'label' => __( 'description color ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef6 p' => 'color: {{VALUE}}',
				],
				'default' =>'#666666'
			]
		);
		
		$this->add_control(
			'alamat_color3',
			[
				'label' => __( 'number color 1 ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef6 p:nth-child(even):before' => 'background-color: {{VALUE}}',
				],
				'default' =>'#34435E'
			]
		);
		
						$this->add_control(
			'alamat_color4',
			[
				'label' => __( 'number color 2 ', 'timeline-simple-Elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #motekef6 p:nth-child(odd):before' => 'background-color: {{VALUE}}',
				],
				'default' =>'#34435E'
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
					'{{WRAPPER}}  #motekef6 p' => 'text-align:{{VALUE}}',
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
	<div id="motekef6" <?php $this->print_render_attribute_string( 'list' ); ?>>
<?php 
foreach ( $settings['list'] as $index => $item ) :
?>	
  <p><?php echo esc_attr( $item['title'] ); ?></p>
<?php
endforeach;
?> 
</div>
      <?php
   }
}