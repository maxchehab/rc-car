#!/usr/bin/env python
import time
import sys
from pololu_drv8835_rpi import motors, MAX_SPEED


motors.setSpeeds(int(sys.argv[1]),int(sys.argv[2])) 



