## Software Engineering Project
### Down below is a Python function for a weather station. 
![weather]({{ site.url }}/images/weather.jpeg){:height="200px" width="900px"}  
 
### This project is a weather station that was written in python with the help of a Raspberry Pi, a Grove Pi, 3 LED sensors, a light sensor and a temperature and humidity sensor. This program takes temperature and humidity readings every 30 minutes, only when the lights are on. This is to simulate day time, in the requirements they did not want to take any readings at night. Then depending on what the temperature and humidity is, it will have a different color LED on to show a range of values. The values then get stored in a JSON file on the local machine. For this project I also wrote a webpage to take these values and display them in a graph. I created this project in October 2018 for a class in Emerging System Architecture and Technology for Southern New Hampshire University. Below is a video talking about the code review process and the changes that I eventually made to the project.  

<iframe width="560" height="315" src="https://www.youtube.com/embed/-EyROAOU5D4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  

### I chose this artifact for my portfolio because it showcases many different things. In the development of this project, I used python, JavaScript, JSON, HTML, Grove Pi, Raspberry Pi, and all the sensors and external devices to get this project to work. This is a fully functional program that shows that I can create a software development project and I think the project shows that. I improved this project by just tiding it up. I followed pythons coding standards and put everything inline. I also got rid of old testing statements and repeated code that could be put in a single function.  

### What I learned the most was, how important code review is. I went through this project line by line looking for every little thing I could because I want my work to be perfect and show my attention to detail. No is it perfect? Probably not, not I still want to shoot for that. This work reflects me and one that I am proud to show off. That is why code review is important. It makes you look at these artifacts piece by piece and tear it apart. This not only makes the work better but how you process and think about your code which is an invaluable skill. The only challenges I faced was trying to get out of my own head. When you write code, you think it is perfect and being able to step back and try to look at it as if it is someone else’s code is not easy but something we must do.  

### Here is a snippet of the code after the changes were made. This shows the different requirements needed to have each LED on or off.  

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

Find the repository [here](https://github.com/MrMauzy/Weather-Station)  

## Algorithms
![dice]({{ site.url }}/images/dice.jpg){:height="200px" width="900px"}

### For this artifact I chose a side project that I picked to help me learn C#. This is a text-based RPG with a GUI, using WPF and C#. This is based off a tutorial series by Scott Lilley found here (https://scottlilly.com/build-a-cwpf-rpg/). I started this whole project in the beginning of September and I continue to work on it whenever the time allows me to. I chose to improve the magic attack mechanic in this game. This can be found in the ‘GameSession.cs’ class on lines 267-316. In the tutorial there is no magic, so I wanted to add and build on something that would be mostly my design. The way this works is the use has a drop down to pick a certain magical spell and then there is a button that will attack a monster if there is one on the location you are located. You will get different errors if there is no monster on the square, no spell selected and if you have insufficient mana.  
### I chose this part of the program because it is a good example of an algorithm. It is all encapsulated and a good example of object-oriented programming. There is catch functions to make sure that the attack will happen when it is able. I have attached screen shows of the program before the changes, after the changes and an example of a function I created to take mana after a spell is used. This is a very big program that keeps growing, that is why I just chose one mechanic to highlight but I will post the whole program for people to look at and modify if they so desire. I improved this piece of my program in a couple different ways. First, there was no way for this program to use and modify how many magic points the user has. Next, I added lots of catch statements to allow checks for things like if there is anyone even there for you to attack. I then added comments so someone looking at my code will know what each loop does.  
### I think this project is a good representation of an algorithm and it met all the course objectives that were required for this project. This is one of the programs that I am most excited to work on and continue to work on until I get a fully finished program that will be available on GitHub. As I go on I will continue to make updates and write tests to find bugs and thing that don’t work like they should. This is still in very early development where I am just trying to get all the game mechanics added.  

Find the repository [here](https://github.com/MrMauzy/RPG-Magic)

## Databases
![binary]({{ site.url }}/images/data.jpeg){:height="200px" width="900px"}

### This narrative will discuss my artifact that I selected for the Database section. This artifact was written in Python, using PyMongo to do some basic CRUD operations. CRUD is an acronym that stands for create, read, update and delete. I created this in CS-340 Advanced Programming Concepts here at Southern New Hampshire University. For this project we used Codio, which in online interactive IDE where we write the code and can run the program, and have it act and interact as a real database. This artifact only has 4 functions that will do the basic CRUD operations on data in the database.  
### I selected this artifact for the mere fact that it is a database program and it fit perfectly in the requirements for this specific milestone. I picked this specific one because it picks up and executes all 4 functions with no issues, at least I thought that when I first selected it. This artifact shows that I know how to create a database, modify a database and then close the database when I am finished. I updated this project a few different ways. First, I used python coding standards and refactored the code. When I originally wrote this code, I did it in a normal text editor to my spacings were inconsistent and I did not follow any coding standards at all. So, after I refactored the code I then found and fixed typos that were in the code. I had some output statements even that had typos. After that was done I then just tried to use programming best practices and make the code more solid. One example is I had a check statement that used != None. I then changed that to ‘is not None’ which in Python work better and makes the code easier to read. Then lastly, I got rid of unused imports and any statements and variables that were not used in this program. Once that was done the program came out to be a lot more robust and solid.  
### I think this program and modifications does meet all the course objectives. I took a mediocre program and made it more robust and a lot better looking. I made it easier to read and understand and it shows a solid knowledge of the basic operations in PyMongo. As of right now I do not have any future modifications to this artifact, but I do have plans to work more with C# and databases just, so I can become a more well-rounded programmer.  
### For this project I did not face any big problems or challenges. I just went through my list and made one change at a time, but I did learn some stuff. I tried to look at my code as an outsider and pick it apart. Doing that helped me see the flaws in my comments and the program overall. I think looking at it like this made the program a lot better but also enhanced code review skills. I think this is a great program for my portfolio and I can’t wait to add the final product.  

Find the repository [here](https://github.com/MrMauzy/MongoDB-CRUD)
