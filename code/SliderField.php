<?php

/**
 * Field for a numeric slider
 *
 * @author Damian Mooyman
 * @package sliderfield
 */
class SliderField extends NumericField
{
    
    public function Type()
    {
        return 'slider ' . parent::Type();
    }
    
    protected $orientation = 'horizontal';
    
    /**
     * Gets the orientation of this field
     * 
     * @return string Either 'horizontal' or 'vertical'
     */
    public function getOrientation()
    {
        return $this->orientation;
    }
    
    /**
     * Set the orientation of this field to horizontal or vertical
     * 
     * @param string $orientation Either 'horizontal' or 'vertical'
     * @return self
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
        return $this;
    }
    
    /**
     * Max slider value
     *
     * @var integer
     */
    protected $maximum;
    
    /**
     * Minimum slider value
     *
     * @var integer
     */
    protected $minimum;
    
    /**
     * Create a SliderField object
     * 
     * @param string $name
     * @param string $title
     * @param integer $minimum
     * @param integer $maximum
     * @param integer $value
     * @param integer $maxLength
     * @param Form $form
     */
    public function __construct($name, $title = null, $minimum = null, $maximum = null, $value = '', $maxLength = null, $form = null)
    {
        parent::__construct($name, $title, $value, $maxLength, $form);
        
        $this->setMaximum($maximum);
        $this->setMinimum($minimum);
    }
    
    /**
     * Get the maximum range value
     * 
     * @return integer
     */
    public function getMaximum()
    {
        return $this->maximum;
    }
    
    /**
     * Set the maximum range value
     * 
     * @param integer $maximum
     */
    public function setMaximum($maximum)
    {
        if ($maximum === null) {
            $maximum = self::config()->default_maximum;
        }
        $this->maximum = $maximum;
    }
    
    /**
     * Get the minimum range value
     * 
     * @return integer
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
    
    /**
     * Set the minimum range value
     * 
     * @param integer $minimum
     */
    public function setMinimum($minimum)
    {
        if ($minimum === null) {
            $minimum = self::config()->default_minimum;
        }
        $this->minimum = $minimum;
    }

    public function Field($properties = array())
    {
        Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
        Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.js');
        Requirements::javascript(THIRDPARTY_DIR . '/jquery-entwine/dist/jquery.entwine-dist.js');
        Requirements::javascript(basename(dirname(dirname(__FILE__))) . '/javascript/SliderField.js');
        Requirements::css(basename(dirname(dirname(__FILE__))) . '/css/SliderField.css');

        return parent::Field($properties);
    }
    
    public function getAttributes()
    {
        return array_merge(
            parent::getAttributes(),
            array(
                'value' => $this->dataValue(),
                'data-min' => $this->getMinimum(),
                'data-max' => $this->getMaximum(),
                'data-orientation' => $this->getOrientation()
            )
        );
    }
}
