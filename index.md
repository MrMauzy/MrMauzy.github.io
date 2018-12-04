## Hello, I am a Computer Science Graduate based in Springfield, Missouri. I have always love creating art from 3D Animation to hand drawn cartoons. I fell in love with software development and I hope you stick around and see what I have made. 

![useful image]({{ site.url }}/images/cards.jpg){:height="400px" width="400px"}

## My main GitHub page can be found [here](https://github.com/mrmauzy).

### What are you looking at??

What you are looking at is my portfolio that showcases the skills I have acquired though my journey into software development and the passion that I put into this field of study. Throughout my degree I have worked on many different projects and I have selected a few to put into my portfolio. I tried to stick with some core Computer Science topics such as Software Design and Engineering, Algorithms and Data Structures, and Databases and that will grow as time goes on. This work exemplifies a broad scope of what I have learned in my degree and I would like to go over how these projects have made me a more well-rounded software developer.  

## Software Engineering Project
### Down below is a Python function for a weather station.
### Find the whole code [here](https://github.com/MrMauzy/Weather-Station)
### This weather station project uses a Raspberry Pi, Grove Pi, JSON and a lot of different sensors.
### This was done for a class on Emerging System Architecture and Technology at SNHU.

```
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

```

### This function will tell if a light is on (to simulate day time) and then record and display different LED's depending on what the temperature and humidity readings are. 
