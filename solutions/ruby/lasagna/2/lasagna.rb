class Lasagna
  
  EXPECTED_MINUTES_IN_OVEN = 40
  LAYER_PREPARE_TIME = 2
  
  def remaining_minutes_in_oven(actual_minutes_in_oven)
    return EXPECTED_MINUTES_IN_OVEN - actual_minutes_in_oven
  end

  def preparation_time_in_minutes(layers)
    return layers * LAYER_PREPARE_TIME
  end

  def total_time_in_minutes(number_of_layers:, actual_minutes_in_oven:)
    return number_of_layers * 2 + actual_minutes_in_oven
  end
end
