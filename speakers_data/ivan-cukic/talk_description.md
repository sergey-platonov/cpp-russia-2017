Functional programming is often said to be necessary in multi-threaded environments, but that is only one part of the story.
Avoiding mutation helps avoid explicit synchronization of concurrent processes, but it can also be helpful in other circumstances.

In this talk, we are going to cover the basic ideas of functional programming and functional software design.
We will focus mainly on how to design stateful software that never mutates any data, and how to do it optimally.