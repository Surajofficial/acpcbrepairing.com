<?php
if (strtolower(trim($city)) == strtolower(trim($state))) {
  $dec = "Multitech Institute is the best $device repairing institute in $city. We give practical-based classes for $device repairing course in $city";
} else {
  $dec = "Multitech Institute is the best $device repairing institute in $city. We give practical-based classes for $device repairing course in $city, $state";
}
switch ($device) {
  case "mobile":
    if (strtolower(trim($city)) == strtolower(trim($state))) {
      $key = "mobile repairing training in $city, mobile repairing course in $city, mobile repairing institute in $city, mobile repairing course, mobile repairing institute, mobile repairing course in India, mobile repairing institute in India, smartphone repairing course, smartphone repairing institute, best mobile repairing training institute, mobile repairing training";
    } else {
      $key = "mobile repairing training in $city, mobile repairing course in $city, mobile repairing institute in $city, mobile repairing course, mobile repairing institute, mobile repairing course in $state, mobile repairing institute in $state, mobile repairing course in India, mobile repairing institute in India, smartphone repairing course, smartphone repairing institute, best mobile repairing training institute in $state, best mobile repairing training institute, mobile repairing training, mobile repairing training in $state";
    };
    break;
  case "led tv":
    if (strtolower(trim($city)) == strtolower(trim($state))) {
      $key = "led repairing training in $city, mobile repairing course in $city, mobile repairing institute in $city, mobile repairing course, mobile repairing institute, mobile repairing course in India, mobile repairing institute in India, smartphone repairing course, smartphone repairing institute, best mobile repairing training institute, mobile repairing training";
    } else {
      $key = "led repairing training in $city, mobile repairing course in $city, mobile repairing institute in $city, mobile repairing course, mobile repairing institute, mobile repairing course in $state, mobile repairing institute in $state, mobile repairing course in India, mobile repairing institute in India, smartphone repairing course, smartphone repairing institute, best mobile repairing training institute in $state, best mobile repairing training institute, mobile repairing training, mobile repairing training in $state";
    };
    break;
  case "laptop":
    if (strtolower(trim($city)) == strtolower(trim($state))) {
      $key = "laptop repairing training in  $city, laptop repairing course in  $city, laptop repairing institute in  $city,laptop repairing course, laptop repairing institute, laptop repairing course in india, laptop repairing institute in india, best laptop repairing training institute, laptop repairing training";
    } else {
      $key = "laptop repairing training in  $city, laptop repairing course in  $city, laptop repairing institute in  $city,laptop repairing course, laptop repairing institute, laptop repairing course in  $state, laptop repairing institute in  $state, laptop repairing course in india, laptop repairing institute in india, best laptop repairing training institute in  $state, best laptop repairing training institute, laptop repairing training, laptop repairing training in  $state";
    };
    break;
  case "ac pcb":
    if (strtolower(trim($city)) == strtolower(trim($state))) {
      $key = "AC Repairing Course In $city, AC PCB Repairing Course In $city, AC Repairing Institute In $city, AC PCB Repairing Institute In $city, AC Repairing Course, AC Repairing Course In India, AC PCB Repairing Course, AC PCB Repairing Course In India, AC PCB Repairing Course Near Me, AC Repairing Course Near Me, Inverter AC Repairing Course, Non-Inverter AC Repairing Course, AC Repairing Institute, AC Repairing Institute In India, AC PCB Repairing Institute, AC PCB Repairing Institute In India, AC Repairing Institute Near Me, AC PCB Repairing Institute Near Me, Inverter AC Repairing Institute, Non-Inverter AC Repairing Institute";
    } else {
      $key = "AC Repairing Course In $city, AC PCB Repairing Course In $city, AC Repairing Institute In $city, AC PCB Repairing Institute In $city, AC Repairing Course In $state, AC PCB Repairing Course In $state, AC Repairing Institute In $state, AC PCB Repairing Institute In $state, AC Repairing Course, AC Repairing Course In India, AC PCB Repairing Course, AC PCB Repairing Course In India, AC PCB Repairing Course Near Me, AC Repairing Course Near Me, Inverter AC Repairing Course, Non-Inverter AC Repairing Course, AC Repairing Institute, AC Repairing Institute In India, AC PCB Repairing Institute, AC PCB Repairing Institute In India, AC Repairing Institute Near Me, AC PCB Repairing Institute Near Me, Inverter AC Repairing Institute, Non-Inverter AC Repairing Institute";
    };
    break;
  default:
    exit();
}
