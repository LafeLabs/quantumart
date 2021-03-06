[../](../)

# Visualization of Multi-Qubit States in 3d in a Web Browser 

The Bloch sphere has proved an indispensable tool for understanding qubits since the beginning of quantum mechanics.  As quantum computing has evolved into a more mature field, various researchers have struggled to create a equally useful geometric visualization tool for higher numbers of qubits.   

In this paper we discuss the geometry of the Hilbert space of multi qubit systems.  In broad terms the goal of this work is the generalization of the Bloch sphere.  However rather than report yet another attempt at doing this from a formal mathematical perspective, we describe a set of angles which describe the state of a multi-qubit quantum computer system and show a *path* to mapping these angles into three dimensional space using the 3d JavaScript library three.js.  

We thus take the position in this work that there will never be one perfect way to project many-dimensional qubit states down into three dimensional space that our minds can understand, and that the best we can do is create classes of such maps, build software tools to implement them, and let researchers use what they need for any given problem.  


First, consider the 1 qubit system.  The states of this system are represented by 

$$
a_0e^{i\phi_0}\left|0\right> + a_1e^{i\phi_1}\left|1\right>.
$$

We can remove a global phase so that there is only one phase angle, $\phi_0$.  Also, both $a_0$ and $a_1$ are non-negative real numbers, which normalize to one:

$$
a_0^2 + a_1^2 = 1
$$

Thus, the whole equation can be re-written in terms of one angle around a circle described by the above equation and one angle for the phase difference in the states:

$$
\cos{\theta_0}\left|0\right> + \sin{\theta_0}e^{i\phi_0}\left|1\right>.
$$

The basic premise of this work is that we simply map these angles to angles in a visualization and see what happens.  Whatever the state of the quantum system may do, it will lead to a time series of these angles.  One mapping is the Bloch sphere, but that is just one of an infinite number.  Also, we can map the normalized real numbers $a_i$ to either the size or opacity of 3d objects in the browser.

To compute $\theta_0$ from $a_0$ we need only to find the arc cosine of $a_0$.  

We note here that this pair of angles is *not* the Bloch sphere.  Our parameterization maps the eigenstates to orthogonal vectors in three dimensions, rather than the north and south poles.

Now, consider the 2 qubit system.  Again removing global phase from the ground state, the full state of the system is now:

$$
a_0\left|00\right> + a_1e^{i\phi_0}\left|01\right> + a_2e^{i\phi_1}\left|10\right> + a_3e^{i\phi_2}\left|11\right>.
$$

Here the coefficients are again normalized as

$$
a_0^2  + a_1^2 + a_2^2 + a_3^2 = 1
$$

This equation describes the set of all points the same distance from a center in 4 dimensions, which is called a three sphere.  Without assigning any physical significance to the specific angles, we can search for angles which can be used to parameterize this higher dimensional sphere like entity, which we will generically call a hypersphere.  The resulting parameterization is as follows:

$$
a_0 = \cos{\theta_0}
$$
$$
a_1 = \sin{\theta_0}\cos{\theta_1}
$$
$$
a_2 = \sin{\theta_0}\sin{\theta_1}\cos{\theta_2}
$$
$$
a_3 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}
$$

to illustrate that this collection of values works, we first look at the sum of the squares of the last two terms:

$$
a_2^2 + a_3^2 = \sin^2{\theta_0}\sin^2{\theta_1}(\cos^2{\theta_2} + \sin^2{\theta_2}) = \sin^2{\theta_0}\sin^2{\theta_1},
$$

from which we can see that 

$$
a_1^2 + a_2^2 + a_3^2 = \sin^2{\theta_0}\cos^2{\theta_1} + \sin^2{\theta_0}\sin^2{\theta_1}  = \sin^2{\theta_0}(\cos^2{\theta_1} + \sin^2{\theta_1}) = \sin^2{\theta_0},
$$

and finally 

$$
a_0^2  + a_1^2 + a_2^2 + a_3^2 = \cos^2{\theta_0} + \sin^2{\theta_0} = 1,
$$
which is the final result.


Now, we must show how to get from a collection of a's to a collection of $\theta$'s.  Again, we start with the first one to get 

$$
\theta_0 = \arccos{a_0}.
$$

Also,
$$
\sin{\theta_0} = \pm\sqrt{1 - \cos^2{\theta_0}}= \pm\sqrt{1 - a_0^2},
$$
so
$$
a_1 = \pm\sqrt{1 - a_0^2}\cos{\theta_1}
$$
or
$$
\cos{\theta_1} = \pm\frac{a_1}{\sqrt{1 - a_0^2}}
$$
from which we get
$$
\theta_1 = \arccos{\left(\pm\frac{a_1}{\sqrt{1 - a_0^2}}\right)}
$$

$$
\theta_2 = \arccos{\left(\frac{a_2}{\sin{\theta_0}\sin{\theta_1}}\right)}
$$

In summary:


$$
\theta_0 = \arccos{a_0}.
$$

$$
\theta_1 = \arccos{\left(\frac{a_1}{\sin{\theta_0}}\right)}
$$

$$
\theta_2 = \arccos{\left(\frac{a_2}{\sin{\theta_0}\sin{\theta_1}}\right)}
$$

# three qubits

Now, for three qubits we attempt to see the patterns so that this can all be generalized to n qubits.  


$$
a_0\left|000\right> + a_1e^{i\phi_0}\left|001\right> + a_2e^{i\phi_1}\left|010\right> + a_3e^{i\phi_2}\left|011\right>+
a_4e^{i\phi_3}\left|100\right> + a_5e^{i\phi_4}\left|101\right> + a_6e^{i\phi_5}\left|110\right> + a_7e^{i\phi_6}\left|111\right>
$$

$$
a_0^2  + a_1^2 + a_2^2 + a_3^2 + a_4^2  + a_5^2 + a_6^2 + a_7^2 = 1
$$

Now, from the 2 qubit case we write down the pattern and use it to find how to get from angles $\theta_i$ to coefficients $a_i$.  First of all, the first coefficient will always be $a_0 = \cos{\theta_0}$, as by convention we set the ground state to 1 when all angles are zero.  

Then, as we move forward to the next coefficient, we add $\cos{\theta_i}$ for each $a_i$ up to the last one which will break this pattern, and all other angles will be sines.  The last coefficient will be a product of sines of all angles.  Thus:

$$
a_0 = \cos{\theta_0}
$$

$$
a_1 = \sin{\theta_0}\cos{\theta_1}
$$

$$
a_2 = \sin{\theta_0}\sin{\theta_1}\cos{\theta_2}
$$

$$
a_3 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\cos{\theta_3}
$$

$$
a_4 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\cos{\theta_4}
$$

$$
a_5 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\sin{\theta_4}\cos{\theta_5}
$$

$$
a_6 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\sin{\theta_4}\sin{\theta_5}\cos{\theta_6}
$$

$$
a_7 = \sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\sin{\theta_4}\sin{\theta_5}\sin{\theta_6}
$$

$$
\theta_0 = \arccos{a_0}
$$

$$
\theta_1 = \arccos{\left(\frac{a_1}{\sin{\theta_0}}\right)}
$$

$$
\theta_2 = \arccos{\left(\frac{a_2}{\sin{\theta_0}\sin{\theta_1}}\right)}
$$

$$
\theta_3 = \arccos{\left(\frac{a_3}{\sin{\theta_0}\sin{\theta_1}\sin{\theta_2}}\right)}
$$

$$
\theta_4 = \arccos{\left(\frac{a_4}{\sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}}\right)}
$$

$$
\theta_5 = \arccos{\left(\frac{a_5}{\sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\sin{\theta_4}}\right)}
$$

$$
\theta_6 = \arccos{\left(\frac{a_6}{\sin{\theta_0}\sin{\theta_1}\sin{\theta_2}\sin{\theta_3}\sin{\theta_4}\sin{\theta_5}}\right)}
$$

This now has both enough repetition and clearly enough defined rules that we can finally write down general formulas for the coefficients and angles.  

For n qubits, there are $N = 2^n$ coefficients, $\{a_0,a_1, ... a_{N-1}\}$.  These coefficients have squares that normalize to one:

$$
a_0^2 + a_1^2 + ... + a_{N-1}^2 = 1,
$$

and so they represent a hypersphere in N dimensional Euclidean space, $\mathbb{R}^{N}$.  

Position on the surface of this hypersphere is described by $N - 1$ angles, $\{\theta_0,\theta_1,...\theta_{N-2}\}$.

As always,
$$
a_0 = \cos{\theta_0}
$$
 
and for $0 < i < N-1$

$$
a_i = \cos{\theta_i}\prod_{j=0}^{i-1}\sin{\theta_j}
$$

and finally 

$$
a_{N-1} = \prod_{j=0}^{N-1}\sin{\theta_j}.
$$

To get from these coefficients back to angles, we can use one formula:

$$
\theta_i = \arccos{\left(\frac{a_i}{ \prod_{j=0}^{i-1}\sin{\theta_j} }\right)}
$$

This mathematical framework allows us to create maps from a multi qubit-space into a collection of rigid-body rotations in a three dimensional space.  Given that both experimental and theoretical computational quantum computing work is usually done with Python in the Jupyter notebook today, our first computational task is to convert state vectors into angles and export that in a format that can easily be read by the JavaScript which runs the three dimensional models in the web browser.  The JSON(JavaScript Object Notation) format is ideal for this, and can be saved as either a text file or binary file.  

Here we need a Jupyter notebook which converts a time series of states into a JSON file of angles for 1,2,3,4,... qubits.


With these angles, we can feed these into three dimensional animations in the browser.  Here we link to demos, describe each one in order: 

- 1 qubit, not Bloch sphere
- 2 qubits, rectangles, 3, 4 up to not working, with random numbers
- show rotation of arbitrary object

Link to a guided tour of the code.

Perhaps a discussion here of various 3d options, and how they are under utilized in physics: threejs, web browser 3d in general, and also game engines. A discussion of how time scales of quantum vs. animation imply potential for real time interaction in quantum control, multiple users, etc.


## outline of a broader scope of paper

- look at existing literature, 2 qubit paper, chad and michel's paper, what we see is lots of mathematical rigor, but what this leads to is largely topological: exact states which are nodes and transformations which are edges on a graph which has no actual geometry in the sense of continuously varying angles or positions or sizes.  

- the value of geometric visualizaiton is not fully realized unless you can get the real time element, and if you can, even a "bad" visualizaiton might have great value. note the time scales: ms for frames, seconds for the mind to think about a thing, microseconds for one shot of a quantum measurement, or ms for 1000s of averages, to get some real geometric information.

- what does qvr do? 


1. first, a quantum computer is put thru the above mathematical transformation to turn it into all angles and probabilities.  
2. Then a subspace of relevant information to the thing being hacked on is defined.  Objects are selected which will be manipulated in the 3 dimensional space of the browser.  
3. A set of positions are chosen for them in 3d space, and they are placed there.  
4. Angles in the quantum system are mapped to angles in the 3d space of the browser, probabilities are mapped to sizes of objects and opacities of objects.
5. the quantum system is run a large number of times to build up statistics to get the angles needed to define the position of the 3d system, and is displayed in the system
6. "torque" can be applied to objects in the browser window using a VR controller, which is translated to an effective torque around some angle in the hypersphere of the quantum computer state, and this torque translates to a calibrated control pulse that is added to the existing program of the quantum computer, which is run again the proper number of times, and turned into a 3d display.  This might be animated or not.  There are also other controls in the VR environment to control other things, like the time axis, either to choose a time for the measurement or a range of times to run, and create an animation, then go back and move through that animation slowly, choose a time, and apply a torque.


This paper should describe how all this works with block diagrams, including threejs, selection of a lattice, how to map opacity and size and angle, simple examples, how threejs maps to full immersive VR, how it connects with existing Python based software frameworks for controlling quantum systems in real time.  The paper is just a white paper with *very simple* demos just of threejs and how to map things. I need to make VERY SIMPLE threejs demos from scratch, of 3 qubit system so 7 or 8 objects.







