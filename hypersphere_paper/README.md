[../](../)

# Hypersphere of Quantum Computing

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

The basic premise of Quantum Virtual Reality is that we simply mape these angles to angles in a visualization and see what happens.  Whatever the state of the quantum system may do, it will lead to a time series of these angles.  One mapping is the Bloch sphere, but that is just one of an infinite number.  Also, we can map the normalized real numbers $a_i$ to either the size or opacity of 3d objects in the browser.

To compute $\theta_0$ from $a_0$ we need only to find the arc cosine of $a_0$.  


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

The task now is to build a python package that converts sequences of quantum states to sequences of angle arrays, both $\theta$ and $\phi$, format in JSON, and output that JSON in a format which can be input into the QVR web interface.






