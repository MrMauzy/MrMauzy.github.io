[here](https://mrmauzy.github.io/)

## Software Engineering Project
### Down below is a Python function for a weather station. 
![weather]({{ site.url }}/images/weather.jpeg){:height="200px" width="900px"}  

Find the whole code [here](https://github.com/MrMauzy/Weather-Station)  
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


## Algorithms
![dice]({{ site.url }}/images/dice.jpg){:height="200px" width="900px"}

[here](https://github.com/MrMauzy/RPG-Magic)

## Databases
![binary]({{ site.url }}/images/data.jpeg){:height="200px" width="900px"}

[here](https://github.com/MrMauzy/MongoDB-CRUD)
