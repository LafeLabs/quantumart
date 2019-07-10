[../](../)

# Quantum Art and Quantum Virtual Reality

When we look at the history of how computer technology has impacted society, art and artists have always been at the forefront of progress.  From video games to film editing to electronic music to simply making the Internet from an all text world to a world of images and symbols that non-technical people can interact with, art has again and again been the difference between an obscure technology which only appeals to experts and something that shifts the mainstream of society.  

Furthermore, this has generally gone farther than just impacting how culture is affected by technology: culture drives attention and money and attention and money drive what gets worked on by engineers.  So ultimately the active participation of what we might loosely call "artists" has been a critical factor again and again in moving computer technology forward even in a purely technical way.  The term "artist" in computer technology also heavily overlaps with the term "hacker", as a description of people who are not behaving as engineers, not trying to simply achieve some numerical technical milestone but are trying to do something out of a sort of whimsy, because it's "cool".  This hacker/artist approach of wild whimsy will prove even more critical in quantum computing than in classical computing because the technology remains so alien to our ways of thinking.  

Realistically we have a small hand full of algorithms, a collection of blue-sky dreams of applications("this has to be useful for chemistry somehow because it's quantum but we're not sure how"), and hardware that is many orders of magnitude shy of what the algorithms will require.  And yet we have still built hardware which can do mind boggling operations in a pure information theory sense.  If we want to make this crude hardware do unexpected things, we need the kinds of people who do unexpected things to hack on it(not engineers, or at least people who are not behaving like engineers).  

The purpose of this project(Quantum Virtual Reality) is twofold: First build a community of developers which crosses the boundary from web-based art creation to back end quantum computer control, and then to leverage the power of this community to crowd source tools for control and real time interaction with quantum computers using 3d tools in a web browser combined with the power of virtual reality and the massive parallelism available in both quantum computers and the Web.

The first of these goals, that of simply building a community of artists, also has benefits for the quantum information field at large.  The public hungers for the quantum.  People outside of our field love to read about and dream about quantum computers and are generally given the same basic "superposition and entanglement" introduction over and over.  In absence of deeper ways to engage with quantum information science, people become enthralled by pseudoscience. It is a hope that building a community of artists working directly with hardware hackers on these systems can create a better pipeline to the public at large about quantum information science, making it more accessible for non experts and giving them something real to think about that connects with this technology.

The goal of this present technical work is to get artists and hackers to start using the quantum computer simply by building a tool to create "cool" things using real quantum hardware.  Specifically the idea is to link front end JavaScript coders, which includes some incredible artists, with the back end Python code that actually drives all the hardware and controls all the simulations in quantum computing today.  By making a set of simple tutorials whereby such people can build beautiful things which run on quantum hardware, we hope to build a community which can crowd source tools that become more interactive, going from making video animations which depict evolution of geometric variables in a quantum computer in a web browser as a single user to the more complex control system which will be described here.

[need to add a bit about art *about* quantum vs. art *on quantum hardware*, reference the MIT work(actual quantum) as well as the Yale work(just about quantum)]

When a web page does things besides just passively deliver information, like animate, calculate, or react, it uses a language called JavaScript, which can run inside any browser.  If you look at the source code of just about any web page that is actually useful to you, all the code that does the things you want like "add this new product to my shopping cart" are in this language.  The fact that JavaScript is easy to learn and runs on literally billions of web enabled devices has made it a fantastic playground for talented artists to make beautiful art. This combines with the two other main languages of the browser, CSS (Cascaded Style Sheets) and HTML (HyperText Markup Language) which decide how things look and what gets put where in the browser.  A very large number of people are experts in all three of these, for web development, and so making a system that enables people with that skill set to connect with a quantum computer increases the number of people who can engage by several orders of magnitude(there are 10's of millions of web developers worldwide).  

What we have done and are currently calling "Quantum Virtual Reality" is to build a simple framework for using the JavaScript library threejs.js to make a system for building animations based on the evolution over time of the state of a quantum computer.  This is in principle quite simple.  The output is a video animation that plays in the Web, and the input can be any of a huge class of data that can be produced either by physical quantum hardware or by the numerous Python-based quantum simulation and theory packages that are currently widely used.  It is worth noting that the quantum "back end" side of all this is also almost entirely in a web browser now, due to the Jupyter notebook system which enables combined Python and documentation files to be edited and run in the browser.  So a user can have multiple browser windows open and be working on both sides of the system.

As for how exactly we translate quantum variables into animations, we must dive into the math of what makes a quantum computer what it is.  

[ones and zeros, vector spaces, complex numbers, n-spheres, high dimensional geometry, time evolution of states, algorithms, noise, the equations and some cartoons, angles to angles, expectation values to opacities or amplitudes]

[description of the actual code/project, links to tutorials]

[time scales in a quantum computer, real time, controls, how to do that]

[parallelism, how many people can contribute to error correction and algorithm finding, searching for algorithms that work with exotic systems like adiabatic QC]

[call to action!!  quantum computer companies, artists, web developers, funding agencies, theorists]  Note that the product of this work is not the work itself, that is not the goal. The goal product is the *people* who use this, who build on it, probably completely rewriting everything.  Our goal is replication and evolution, not construction of technology directly.



The outline of this paper is

- the intro, big picture, quantum art
- what is the quantum computer, geometrically?
- what exactly are we doing here?, how did we do it? link to the thing
- time scales in a quantum computer, how this could go "real time"
- parallelism in a quantum computer, how this could go to massive parallelism with many users MMOQRPG
- road map for getting people involved, calls to action, future paths


Notes from july 10

this should not pretend to be a technical paper, it's an editorial about the importance of art *on* the quantum processor. THAT thesis has to come through clearly.  That simple message is powerful and can get people to move and spend money and do things.  People are already doing art *about* quantum information and quantum computers, and art with quantum systems in some general sense, but this paper is proposing that it should be a priority for people pushing quantum information processor hardware to figure out how to get artists to make a thing on it.  YOU build this.  Follow IBM's lead with hobbyists in CS and physics but aimed at art for arts sake.







