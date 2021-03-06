---
layout: post
title: "Matt Mauzy, Euler's Circuits"
date: 2018-12-05
---

For my first real post I would like to talk about something near and dear to my heart, math (don’t run away just yet). To be more specific, Eulerian circuits or Eulerian cycles, which seems like a simple topic at first, but it really is interesting when you dig in. Eulerian circuits are a branch of graph theory where you have a finite graph, you pick a vertex and traverse the graph only visiting an edge and vertex once except for the vertex you started on, that one you will land on twice (As shown in the image below).   

![Euler Image]({{ site.url }}/images/Euler.png)  

This problem brings us to the Konigsberg Bridge Problem. “In the early 18th century, the citizens of Konigsberg spent their days walking on the intricate arrangement of bridges across the waters of the Pregel River, which surrounded two central landmasses connected by a bridge (image shown below). (Carlson, 2010) So, as the inhabitants of this area crossed these bridges every day, they started to wonder “Can we walk through the town and only cross each bridge exactly once?” Leonhard Euler presented a solution in 1735 stating that this walk would be impossible. His reasoning was to assume that this walk was possible, then each landmass that you travel to, except the initial start point, two bridges must be accounted for on that landmass. One bridge would be needed for entering and one for exiting, this means that each landmass would need double the amount of bridges for the times the landmass was visited. This means that only using each bridge once is impossible because there is an odd number of bridges connecting the landmass.  

![Bridge Problem]({{ site.url }}/images/Bridge.jpg)  

So, this problem could be solved by adding one more bridge and then you could traverse the city with only walking on each bridge once (which the tow did at one point). So, this seems like a straightforward problem that we could figure out with some pencils and an eraser so what is the significance of this problem? Well, come to find out this problem seemed insignificant to Euler himself when someone wrote to him asking to solve this problem for them. He then wrote a letter stating that this problem was a waste of his time and that anyone can solve it. After some thought he found that this was related to a topic Gottfried Wilhelm Leibniz referred to as geometry of position which we now call graph theory. So, what makes this interesting is that it seems like a very trivial problem, but it isn’t solved by geometry, algebra, or even the art of counting. This simple problem stemmed from curious people making a game to see if they could enter and leave the city only visiting each bridge one time and ended up spurring a whole field of mathematics. Therefore, this shows one reason why I love mathematical problems, some may seem trivial and not important, but math is behind everything and when you break it down there is always something interesting happening behind the scenes.  

References  

Carlson, Stephan (July 30th, 2010) Konigsberg Bridge Problem. Retrieved from https://www.britannica.com/science/Konigsberg-bridge-problem  
Sharma, Pulkit (September 20th, 2018) Let’s Think in Graphs: Introduction to Graph Theory and its Applications using Python. Retrieved from https://www.analyticsvidhya.com/blog/2018/09/introduction-graph-theory-applications-python/  
