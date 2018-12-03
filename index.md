## Welcome to Matt Mauzy's GitHub Pages

My main GitHub page can be found [here](https://github.com/mrmauzy).

### Little About Me

My name is Matt Mauzy and I am originally from Cheyenne, Wyoming.  
I have my Bachelor's in Computer Science with a minor in Applied Mathematics.  
I attended Southern New Hampshire University and graduated at the end of 2018.  

## Software Engineering Project
### Down below is a Python function for a weather station.
### Find the whole code [here](https://github.com/MrMauzy/Weather-Station)
### This project uses a Raspberry Pi, Grove Pi, JSON and a lot of different sensors.
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

### This function will tell if a light is on (to simulate day time) and then record and display different
### LED's depending on what the temperature and humidity readings are. 

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/MrMauzy/MrMauzy.github.io/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
