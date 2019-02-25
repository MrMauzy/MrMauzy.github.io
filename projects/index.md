## Software Engineering Project

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome, to my projects page. Down below I have a few different projects that i have worked on, with a few various languages. This is a work in progress so please stop by again to see what I am working on. Have any questions or ides you would like to share? If so please contact me [here]( https://mrmauzy.github.io/contact/).

### Down below is a Python function for a weather station. 
![weather]({{ site.url }}/images/weather.jpeg){:height="200px" width="900px"}  
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This project is a weather station built with python with the help of a Raspberry Pi, a Grove Pi, 3 LED sensors, a light sensor and a temperature and humidity sensor. This was the final project for Emerging Systems Architectures & Technologies at SNHU. This program takes temperature and humidity readings every 30 minutes, only when the lights are on. This is to simulate day time, in the requirements they did not want to take any readings at night. Then depending on what the temperature and humidity is, it will have a different color LED on to show a range of values. The values then get stored in a JSON file on the local machine. For this project I also wrote a webpage to take these values and display them in a graph. I created this project in October 2018 for a class in Emerging System Architecture and Technology for Southern New Hampshire University. Below is a video made for the class where I am talking about the code review process and the changes that I eventually made to the project.  

<iframe width="560" height="315" src="https://www.youtube.com/embed/-EyROAOU5D4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In the development of this project, I used python, JavaScript, JSON, HTML, Grove Pi, Raspberry Pi, and all the sensors and external devices to get this project to work. This is a fully functional program that shows that I can create a software development project and I think the project shows that. I improved this project by just tiding it up. I followed pythons coding standards and put everything inline. I also got rid of old testing statements and repeated code that could be put in a single function.  

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In this project I learned how important code review is. I went through this project line by line looking for every little thing I could. Is it perfect? Probably not, but I still want to shoot for that. That is why code review is important. It makes you look at these artifacts piece by piece and tear it apart. This not only makes the work better but how you process and think about your code which is an invaluable skill. When you write code, you think it is perfect and being able to step back and try to look at it as if it is someone else’s code is not easy but something we must do. I am the type of person that loves constructive criticism because I will never stop learning and growing. So, if you see something that needs changed or have an idea, please use the [Contact Me]( https://mrmauzy.github.io/contact/) section and shoot me a message!  

Here is a snippet of the code after the changes were made. This shows the different requirements needed to have each LED on or off.  


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

## C# RPG
![Home Screen]({{ site.url }}/images/Projects/RPG01.PNG)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This artifact was one I started to help me learn C#. This is a text-based RPG with a GUI, using WPF, XAML, and C#. Up above is a screen shot of the starting screen for the game. This is based off a tutorial series by Scott Lilley found here (https://scottlilly.com/build-a-cwpf-rpg/). I started this whole project in the beginning of September and I continue to work on it whenever the time allows me to. 

![Screen from Game]({{ site.url }}/images/Projects/RPG02.PNG)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Above is another screen grab. This one shows the weapons inventory and even one of the cartoons I have drawn for this game. I am planning on drawing all the enemies and traders in the game and giving it a more cartoon feel. Below is a picture showing how the trader mechanic works in my game. 

![Trader Screen]({{ site.url }}/images/Projects/Trader.PNG)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This has been a fun (and sometime frustrating) project that I continue to grow and change. It has everything I love in programming in one project. From the layout design to the problem solving that come with trying to implement your own ideas into a game of your own. I hope you enjoy it and come back when it is finished!

Below I added just a snippet of the magic attack function.  

```
	// Checks to make sure a Monster is on the location
	if (CurrentMonster == null)
	{
		RaiseMessage("Just who are you trying to Magically Attack?");
		return;
	}

	// If there is no current spell it will give this error
	if (CurrentSpell == null)
	{
		RaiseMessage("You must select a spell, to do the magics.");
		return;
	}

	// Makes sure you have enough mana to cast spell
	if (CurrentPlayer.MagicPoints >= CurrentSpell.ManaCost)
	{
		RaiseMessage($"You attack with a {CurrentSpell.Name} spell and do {CurrentSpell.MagicDamage} damage.");
		CurrentMonster.TakeDamage(CurrentSpell.MagicDamage);
		CurrentPlayer.SpendMana(CurrentSpell.ManaCost);
	}
	else
	{
		RaiseMessage($"You have insufficent mana to cast {CurrentSpell.Name}");
	}
```

Find the repository [here](https://github.com/MrMauzy/RPG-Magic)

## Java Book Tracker
![Book Tracker]({{ site.url }}/images/Projects/MainProgram.PNG)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This was a project I built to help me keep track of the many books I read throughout my search for truth. Up above is a screen shot of the program with some examples listed to the right hand side. This program was written in Java with Swing, which is a GUI widget tool for Java. This program was a great learning experience and one I hope to improve on very soon. 

![Import and Export]({{ site.url }}/images/Projects/ImportExport.PNG)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For this project I even added and import and export feature so I can save my booklist and import or export if needed. This has been a great tool and learning experience and please feel free to download and try it out!


Find the whole repository [here](https://github.com/MrMauzy/Java-Swing-BookTracker).  

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well that was some of my work and i hope you enjoyed it. I hope you come back and see what I will be working on next, I would give some hints but I don't like spoilers. All of my work can be found [here](https://github.com/MrMauzy) and hope to see you soon! 
