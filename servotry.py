from RPi import GPIO
import time
import threading
import datetime
import Adafruit_PCA9685
import sys

from adafruit_servokit import ServoKit
kit = ServoKit(channels=16)

pwm = Adafruit_PCA9685.PCA9685()
pwm.set_pwm_freq(50)


#pwm.set_pwm(2,0, 300)
#pwm.set_pwm(3, 0, 500)
#pwm.set_pwm(4, 0, 300)

#time.sleep(3)

tick = [300, 300, 300, 300, 330, 300]

xoffset = 100
widthRes = 640
heightRes = 480

xscale = widthRes/400
yscale = heightRes/240

def mvs(ch, pos):
    if ch != 2:
        pwm.set_pwm(2, 0, tick[2])
        
    if ch != 3:
        pwm.set_pwm(3, 0, tick[3])

        
    if ch != 4:
        pwm.set_pwm(4, 0, tick[4])

    pwm.set_pwm(ch, 0 , pos+xoffset)
    tick[ch] = pos+xoffset

    
def clawClose():
    pwm.set_pwm(0, 0, 500)
    tick[0] = 500
    
def clawOpen():
    pwm.set_pwm(0, 0 , 300)
    tick[0] = 300

def twist(dir):
    if dir == "left":
        pwm.set_pwm(1, 0, 100) 
    elif dir == "right":
        pwm.set_pwm(1, 0, 500)
    elif dir == "middle":
        pwm.set_pwm(1, 0, 300)
        
def realign():
    print('realigning')
    pwm.set_pwm(1,0, 300)
    pwm.set_pwm(2,0,300)
    pwm.set_pwm(3, 0, 300)
    pwm.set_pwm(4, 0, 300)
    pwm.set_pwm(5, 0, 300)

    tick[1] = 300
    tick[2] = 300
    tick[3] = 300
    tick[4] = 300
    tick[5] = 300

def sleep(kt):
    time.sleep(kt)

realign()

while True:
    input1 = input()
    
    zoo = input1.split(",")
    
    if zoo[0] == "open":
       clawOpen()
       continue
    if zoo[0] == "close":
        clawClose()
        continue
    if zoo[0] == "twistleft":
        twist("left")
        continue
    if zoo[0] == "twistright":
        twist("right")
        continue
    if zoo[0] == "twistmiddle":
        twist("middle")
        continue
    
    xpos = zoo[0]
    ypos = zoo[1]
    
    xpos = int(float(xpos)/xscale)
    xpos = 400 - xpos
    ypos = int(float(ypos)/yscale)
    
    print("x=" + str(xpos) + ", y=" + str(ypos))
    mvs(5, xpos)
    mvs(4, ypos)
 


sys.exit()

mvs(0, 300);
sleep(3);
mvs(0, 500);
sleep(3);
i=100;

while i <= 500:
    mvs(3, i)
    sleep(.5)
    i += 50
    

#mvs(3, 100)
#sleep(3)
#mvs(3, 300)
#sleep(3)
#mvs(3, 500)
#realign()
#pwm.set_pwm(0, 0, 100)
#time.sleep(3)
#pwm.set_pwm(0, 0, 450)
#time.sleep(3)
#pwm.set_pwm(0,0, 500)
#kit.servo[0].set_pulse_width_range(1000,2000)
#kit.servo[0].angle = 180

