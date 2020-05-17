#!/usr/bin/python3

from gpiozero import LED
from time import sleep

zero = LED(27)
one = LED(22)
two = LED(10)
three = LED(9)
four = LED(11)
five = LED(13)
six = LED(19)
seven = LED(26)

seven.off()
six.off()
five.off()
four.off()
three.off()
two.off()
one.off()
zero.off()

while True:
    seven.on()
    six.off()
    five.on()
    four.off()
    three.off()
    two.off()
    one.off()
    zero.on()
    sleep(5)
    exit()
