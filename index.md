## Welcome to Matt Mauzy's GitHub Pages

My main GitHub page can be found [here] (https://github.com/mrmauzy).

### Little About Me

My name is Matt Mauzy and I am originally from Cheyenne, Wyoming. 
I have my Bachelor's in Computer Science with a minor in Applied Mathematics.
I attended Southern New Hampshire University and graduated at the end of 2018. 

### Software Engineering Project
## Down below is some Python code for a weather station.
## This project uses a Raspberry Pi, Grove Pi, JSON and a lot of sensors.
## This project was done for a class on Emerging System Architecture and Technology.

```
# Connect the Grove Light Sensor to analog port A0
# SIG,NC,VCC,GND
light_sensor = 0

# Temp / humidity Sensor is attached to port 7
dht_sensor_port = 7
dht_sensor_type = 0

# Connect the LED to digital port D4
# SIG,NC,VCC,GND
# Blue, Green and Red LED's
BLed = 4
GLed = 5
RLed = 6


# Turn on LED once sensor exceeds threshold resistance
threshold = 15

grovepi.pinMode(light_sensor, "INPUT")
grovepi.pinMode(BLed, "OUTPUT")
grovepi.pinMode(GLed, "OUTPUT")
grovepi.pinMode(RLed, "OUTPUT")

outputData = []

# I had to add these extra sleep functions to stop the NAN errors
sleep(.1)

while True:

    def lights():
        grovepi.digitalWrite(GLed, 0)
        grovepi.digitalWrite(BLed, 0)
        grovepi.digitalWrite(RLed, 0)


    try:
        sleep(0.5)
        # Get sensor value
        sensor_value = grovepi.analogRead(light_sensor)

        # Calculate resistance of sensor in K
        if sensor_value <= 0: # stops dividing by 0 errors
            resistance = 0
        else:
            resistance = float(1023 - sensor_value) * 10 / sensor_value

        # If Light is on, records data
        if resistance > threshold:
            # Send HIGH to switch off LED
            lights()
        # If light is off, turns off and stop recording
        else:
            [temp, humidity] = dht(dht_sensor_port, dht_sensor_type)
            # celsius to fahrenheit conversion
            fahrenheit = (temp * 9/5) + 32
            print(fahrenheit, humidity)
            t = fahrenheit
            h = humidity
            # Send LOW to switch on LED depending on the Temp and humidity
            if fahrenheit > 95:
                grovepi.digitalWrite(RLed, 1)
            elif (60 > fahrenheit < 85) and (humidity < 80):
                grovepi.digitalWrite(GLed, 1)
            elif (85 > fahrenheit < 95) and (humidity < 80):
                grovepi.digitalWrite(BLed, 1)
            elif humidity > 80:
                grovepi.digitalWrite(GLed, 1)
                grovepi.digitalWrite(BLed, 1)
            else:
                print("No Readings!")
            # Sends data to the global array
            outputData.append([t, h])

        # Sleeps for 1800 seconds, or 30 minutes
        sleep(1800)

    except IOError:
        print("Error")

    except KeyboardInterrupt:
        print("Program Terminated by User!!!") # Takes keyboard interrupt and ends
        # Turns off lights ones program stops
        lights()
        # Ends program
        break
    

# Setting up to save the data to outputData text file
with open('outputData.json', 'a') as outfile:
    json.dump(outputData, outfile)
```

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/MrMauzy/MrMauzy.github.io/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
